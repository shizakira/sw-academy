<?php

namespace Framework\Errors;

use Exception;

class ValidatorError extends Exception
{
    public function __construct($message)
    {
        parent::__construct($message);
    }
}
