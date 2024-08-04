<?php

include $_SERVER["DOCUMENT_ROOT"] . "/../vendor/autoload.php";

use Framework\CMain;
use Framework\CUser;
use Framework\Validators\UserValidator;

$VALIDATOR = new UserValidator();
$VALIDATOR->validate(
    [
        'email' => 'sdfoksd',
        'name' => 234,
    ]
);

$VALIDATOR->showErrors();

$APPLICATION = new CMain();
