<?php

// ошибки над собрать
// сделать дефолт для messages 
// new error


namespace Framework\Validators;

use Errorable;
use Framework\Errors\ValidatorError;

abstract class Validator
{
    use Errorable;

    protected static array $messages = [];
    protected static array $rules = [];

    public static function validate(array $data): void
    {
        static::$errors = [];

        self::validateNotEmptyData($data);

        foreach ($data as $field => $value) {
            self::validateField($field, $value);
        }
    }

    public static function validateField(string $field, mixed $value): void
    {
        if (static::$rules[$field]) {
            static::$errors[] = "Неизвестное поле $field";
        }

        if (!preg_match(static::$rules[$field], $value)) {
            static::$errors[$field] = static::$messages[$field];
        }
    }

    public static function validateNotEmptyData(array $data): void
    {
        if (empty($data)) {
            static::add('general', 'Не все поля переданы');
        }
    }
}
