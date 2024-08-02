<?php

include $_SERVER["DOCUMENT_ROOT"] . "/../vendor/autoload.php";

use Framework\CMain;
use Framework\CUser;
use Framework\Validators\Validator;



$APPLICATION = new CMain();

$USER = new CUser(['email' => 'dfs']);
