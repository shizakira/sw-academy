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

    public function add(string $field, string $message): void
    {
        $this->setError($field, $message);
    }

    public function getErrors(): ?array
    {
        if (!$this->hasErrors()) {
            return null;
        }
        return $this->errors;
    }

    public function hasErrors(): bool
    {
        return !empty($this->errors);
    }

    public function showErrors(): void
    {
        if (!$this->hasErrors()) {
            return;
        }

        foreach ($this->getErrors() as $field => $valueError) {
            echo "$field: {$valueError->getMessage()}.<br>";
        }
    }

    public function clearErrors(): void
    {
        $this->errors = [];
    }
}
