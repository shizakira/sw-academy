<?php

namespace Framework\Validators;

use Exception;

abstract class Validator
{
    protected static array $messages = [];
    protected static array $rules = [];

    public static function validate($data)
    {
        self::validateNotEmptyData($data);

        foreach ($data as $field => $value) {
            self::validateField($field, $value);
        }
    }

    public static function validateField($field, $value): void
    {
        if (!preg_match(static::$rules[$field], $value)) {
            throw new \Exception(static::$messages[$field]);
        }
    }

    public static function validateNotEmptyData($data)
    {
        if (empty($data)) {
            throw new \Exception("Не переданы никакие поля");
        }
    }

    public static function validateId($id)
    {
        if (!preg_match(static::$rules['id'], $id)) {
            throw new \Exception(static::$messages['id']);
        }
    }

    public static function validateWithFillable($data, $fillable)
    {
    }

    public static function validateWithRequired($data, $fillable)
    {
    }
}
