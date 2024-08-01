<?php

include "framework/framework.php";

$APPLICATION->setCSS([
    'header' => '.default',
    'authorization' => '.default',
    'footer' => '.default',
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
    $APPLICATION->includeComponent(
        'header',
        '.default',
        [
            'title' => 'Мебель',
            'desc' => 'Центр мебельных технологий',
            'items' => [
                [
                    'href' => '#',
                    'name' => 'Шкафы-купе',
                    'isActive' => false
                ],
                [
                    'href' => '#',
                    'name' => 'Торговая мебель',
                    'isActive' => false
                ],
                [
                    'href' => '#',
                    'name' => 'Кухни',
                    'isActive' => true
                ],
                [
                    'href' => '#',
                    'name' => 'Шкафы-купе',
                    'isActive' => false
                ]
            ],
            'phone' => '+7 3452 00-00-00',
            'button' => 'Заказать',
        ]
    );
    $APPLICATION->includeComponent(
        'authorization',
        '.default',
        [
            'action' => 'script.php',
            'title' => 'Авторизация',
            'inputs' => [
                ['type' => 'text', 'name' => 'name', 'placeholder' => 'Имя*'],
                ['type' => 'text', 'name' => 'phone', 'placeholder' => 'Телефон*'],
            ],
            'button' => 'Войти'
        ]
    );

    $APPLICATION->includeComponent(
        'footer',
        '.default',
        [
            'title' => 'Мебель',
            'desc' => 'Центр мебельных технологий',
            'menu_title' => 'Меню',
            'menu_items' => [
                [
                    'href' => '#',
                    'name' => 'Шкафы купе'
                ],
                [
                    'href' => '#',
                    'name' => 'Кухни'
                ],
                [
                    'href' => '#',
                    'name' => 'Торговое оборудование'
                ],
                [
                    'href' => '#',
                    'name' => 'О компании'
                ],
                [
                    'href' => '#',
                    'name' => 'Контакты'
                ]
            ],
            'contacts_title' => 'Контакты',
            'contacts_items' => [
                [
                    'href' => '#',
                    'name' => 'Шкафы купе',
                ],
                [
                    'href' => '#',
                    'name' => 'Кухни',

                ],
                [
                    'href' => '#',
                    'name' => 'Торговое оборудование'
                ],
                [
                    'href' => '#',
                    'name' => 'О компании',

                ],
                [
                    'href' => '#',
                    'name' => 'Контакты',

                ]
            ],
            'footer_button' => 'Авторизоваться',
            'copyright_items' => [
                [

                    'name' => 'Мебель.ру” Все права защищены',
                    'isOrange' => false
                ],
                [

                    'name' => 'Политика конфиденциальности',
                    'isOrange' => true

                ],
                [

                    'name' => 'Разработка сайта интернет компания “SunWeb”',
                    'isOrange' => false

                ],

            ],
        ]
    );
    ?>
</body>

</html>