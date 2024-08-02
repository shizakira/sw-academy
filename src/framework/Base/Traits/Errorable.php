<?php

use Framework\Errors\ValidatorError;

trait Errorable
{
    protected static array $errors = [];

    public static function setError(string $field, string $message): void
    {
        static::$errors[$field] = new ValidatorError($message);
    }

    public static function getError(string $field): ?ValidatorError
    {
        return static::$errors[$field] ?? null;
    }

    public static function hasError(string $field): bool
    {
        return isset(static::$errors[$field]);
    }

    public static function add(string $field, string $message): void
    {
        static::setError($field, $message);
    }
}
