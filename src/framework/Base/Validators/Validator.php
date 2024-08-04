<?php

// ошибки над собрать
// сделать дефолт для messages 
// new error


namespace Framework\Validators;

use Framework\Traits\Errorable;

abstract class Validator
{
    use Errorable;

    protected static array $messages = [];
    protected static array $rules = [];

    public function validate(array $data): void
    {
        $this->validateNotEmptyData($data);

        foreach ($data as $field => $value) {
            $this->validateField($field, $value);
        }
    }

    public function validateField(string $field, mixed $value): void
    {
        if (static::$rules[$field]) {
            $this->add($field, 'Неизвестное поле');
        }

        if (!preg_match(static::$rules[$field], $value)) {
            $this->add($field, static::$messages[$field]);
        }
    }

    public function validateNotEmptyData(array $data): void
    {
        if (empty($data)) {
            $this->add('general', 'Не все поля переданы');
        }
    }
}
