<?php

include $_SERVER["DOCUMENT_ROOT"] . "/../vendor/autoload.php";

use Framework\CMain;
use Framework\CUser;

$APPLICATION = new CMain();

$USER = new CUser(['email' => 'dfs']);
