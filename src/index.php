<?php

include "framework/framework.php";

$APPLICATION->setCSS([
    'header' => '.default',
    'footer' => '.default',
    'welcome' => '.default',
    'kitchen' => '.default',
    'application' => '.default',



]);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php $APPLICATION->showCSS() ?>
    <link rel="stylesheet" href="common.css">

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
        'welcome',
        '.default',
        [
            'title' => 'Заказывайте кухню от производителя',
            'desc' => 'Высокое качество, профессиональный подход и креативные решения',
            'desc_bold' => 'Работаем по Тюмени и Тюменской области',
            'button_text' => 'Оставить заявку'
        ]
    );
    $APPLICATION->includeComponent(
        'kitchen',
        '.default',
        [
            'title' => 'Виды кухонь',
            'cards' => [
                [
                    'src' => 'img/cards/линейные.png',
                    'alt' => 'Линейные',
                    'title' => 'Линейные',
                    'desc' => 'Такой вид кухни подойдёт в случае, если вам необходимо сэкономить место в помещении'
                ],
                [
                    'src' => 'img/cards/uglovie.png',
                    'alt' => 'Угловые',
                    'title' => 'Угловые',
                    'desc' => 'Угловая кухня позволит увеличить количество отсеков для посуды'
                ],
                [
                    'src' => 'img/cards/островные.png',
                    'alt' => 'Островные',
                    'title' => 'Островные',
                    'desc' => 'Остров сочетает в себе систему хранения принадлежностей и обеденную зону'
                ]
            ]
        ]
    );
    $APPLICATION->includeComponent(
        'kitchen',
        '.default',
        [
            'title' => 'Стили кухонь',
            'cards' => [
                [
                    'src' => 'img/cards/huitek.png',
                    'alt' => 'huitek',
                    'title' => 'Хайтек',
                    'desc' => 'Данный стиль кухни придаст вашей квартире современный вид'
                ],
                [
                    'src' => 'img/cards/classic.png',
                    'alt' => 'classic',
                    'title' => 'Классика',
                    'desc' => 'Классический стиль подойдёт ценителям непревзойдённой мебели прошлых эпох'
                ],
                [
                    'src' => 'img/cards/неоклассика.png',
                    'alt' => 'неоклассика',
                    'title' => 'Заказывайте кухню от производителя',
                    'desc' => 'Исполнение в стиле неоклассики — смешение античной и современной архитектуры'
                ],
                [
                    'src' => 'img/cards/huitek.png',
                    'alt' => 'huitek',
                    'title' => 'Хайтек',
                    'desc' => 'Данный стиль кухни придаст вашей квартире современный вид'
                ],
                [
                    'src' => 'img/cards/classic.png',
                    'alt' => 'classic',
                    'title' => 'Классика',
                    'desc' => 'Классический стиль подойдёт ценителям непревзойдённой мебели прошлых эпох'
                ],

            ]
        ]
    );
    $APPLICATION->includeComponent(
        'application',
        '.default',
        [
            'title' => 'Оставьте заявку',
            'desc' => 'Наши специалисты свяжутся с вами в течение одного часа',
            'action' => 'handler.php',
            'inputs' => [
                [
                    'type' => 'text',
                    'placeholder' => 'Имя',
                    'name' => 'name'
                ],
                [
                    'type' => 'tel',
                    'placeholder' => 'Телефон',
                    'name' => 'tel'
                ]
            ],
            'button' => 'Отправить',

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