<?php

namespace Framework\Traits;

use Framework\Errors\ValidatorError;

trait Errorable
{
    protected array $errors = [];

    public function setError(string $field, string $message): void
    {
        $this->errors[$field] = new ValidatorError($message);
    }

    public function getErrors()
    {
        if ($this->hasErrors()) {
            return null;
        }
        return $this->errors;
    }

    public function hasErrors(): bool
    {
        return empty($this->errors);
    }

    public function add(string $field, string $message): void
    {
        $this->setError($field, $message);
    }

    public function showErrors(): void
    {
        foreach ($this->getErrors() as $field => $ValueError) {
            echo "Невалидное поле $field: {$ValueError->getMessage()}.<br>";
        }
    }
}
