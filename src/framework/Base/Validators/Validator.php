<?php

namespace Framework\Validators;

use Framework\Traits\Errorable;

abstract class Validator
{
    use Errorable;

    protected static array $messages = [];
    protected static array $rules = [];

    public function validate(array $data, $required = false): ?array
    {
        $this->validateNotEmptyData($data);

        if ($required) {
            $this->validateRequiredFields($data);
        }

        foreach ($data as $field => $value) {
            $this->validateField($field, $value);
        }

        return $this->getErrors();
    }

    public function validateNotEmptyData(array $data): void
    {
        if (empty($data)) {
            $this->add('general', 'Не переданы данные');
        }
    }

    public function validateField(string $field, mixed $value): void
    {
        if (!in_array($field, array_keys(static::$rules))) {
            $this->add($field, 'Неизвестное поле');

            return;
        }

        if (!preg_match(static::$rules[$field], $value)) {
            $this->add($field, static::$messages[$field]);
        }
    }

    public function validateRequiredFields(array $data): void
    {
        $fields = array_keys($data);
        $requiredFields = array_keys(static::$rules);

        if (array_diff($requiredFields, $fields)) {
            $this->add('general', 'Не переданы обязательные поля');
        }
    }
}
