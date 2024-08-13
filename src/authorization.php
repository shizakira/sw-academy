<?php

include "framework/framework.php";

$APPLICATION->setTitle('Мебель');
$APPLICATION->setTemplatePath('MAIN_TEMPLATE');
$APPLICATION->setCSS(
    [
        'authorization' => '.default',
    ]
);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php $APPLICATION->showTitle() ?></title>
    <link rel="stylesheet" href="<?= $APPLICATION->getCommonStyles() ?>">
    <?php $APPLICATION->showCSS() ?>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

</head>

<body>
    <?php

    $APPLICATION->includeHeader(arParams: [
        'title' => 'Мебель',
        'desc' => 'Центр мебельных технологий',
        'navbar_items' => [
            ['href' => '#', 'text' => 'Шкафы-купе', 'is_active' => false],
            ['href' => '#', 'text' => 'Торговая мебель', 'is_active' => false],
            ['href' => '#', 'text' => 'Кухни', 'is_active' => true],
            ['href' => '#', 'text' => 'Контакты', 'is_active' => false],
        ],
        'phone' => '+7 3452 00-00-00',
        'button' => 'Оставить заявку',
    ],);
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
    $APPLICATION->includeFooter(
        arParams: [
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
                    'href' => 'mailto:info@mebel.ru',
                    'name' => 'info@mebel.ru',
                ],
                [
                    'href' => '#',
                    'name' => 'Калинина, 22/1',
                ],
                [
                    'href' => 'tel:+7 (3452) 00-00-00',
                    'name' => '+7 (3452) 00-00-00'
                ],
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