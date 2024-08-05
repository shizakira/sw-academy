<?php

include $_SERVER["DOCUMENT_ROOT"] . "/../vendor/autoload.php";

use Framework\CMain;
use Framework\Validators\UserValidator;

$VALIDATOR = new UserValidator();
dd(
    $VALIDATOR->validate(
        [
            'email' => 'commuwpucej.ky',
            'name' => '1',
            'password' => 'qwerty',
            'role' => 1,
        ],
        required: true
    )
);
$APPLICATION = new CMain();
