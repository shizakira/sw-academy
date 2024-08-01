<?php

include "framework/framework.php";

$APPLICATION->setCSS([
    'header' => '.default',

]);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php $APPLICATION->showCSS() ?>
</head>

<body>
    <?php
    $APPLICATION->includeComponent('header', '.default');


    ?>
</body>

</html>