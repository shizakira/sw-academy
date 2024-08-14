<?php

namespace App\templates\main\components\application;

use Framework\CUser;

class Ajax
{
    public function __invoke(string $name, ...$arguments)
    {
        $name .= "Action";

        if (!method_exists(self::class, $name)) {
            throw new \Exception("Action not found");
        }

        return $this->$name(...$arguments);
    }

    public function createAction(array $payload = null)
    {
        if (empty($payload)) {
            throw new \Exception("Payload empty");
        }

        return CUser::create($payload, true)->getId();
    }
}
