<?php

include $_SERVER["DOCUMENT_ROOT"] . "/../vendor/autoload.php";

use Framework\CMain;
use App\framework\Base\CApi;
use Framework\Validators\UserValidator;

$VALIDATOR = new UserValidator();
$APPLICATION = new CMain();
$API = new CApi();
