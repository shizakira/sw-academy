<?php

include "framework/framework.php";

$APPLICATION->setTitle('Мебель');
$APPLICATION->setTemplatePath('MAIN_TEMPLATE');
$APPLICATION->setCSS(
    [
        'welcome' => '.default',
        'kitchen' => '.default',
        'application' => '.default',
        'about' => '.default',
        'offer' => '.default'

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
    <script>
        const CONFIG = JSON.parse('<?= $APPLICATION->frontConfig() ?>');
        const APP = {
            runComponentAction: async (component, action, payload = null, headers = {}) => {
                return await fetch(CONFIG.endpoint, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json; charset=utf-8',
                        ...headers
                    },
                    body: JSON.stringify({
                        component,
                        action,
                        payload,
                        headers
                    })
                }).then((response) => response.json());
            },
        };
    </script>
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
        'welcome',
        arParams: [
            'title' => 'Заказывайте кухню от производителя',
            'desc' => 'Высокое качество, профессиональный подход и креативные решения',
            'desc_bold' => 'Работаем по Тюмени и Тюменской области',
            'button_text' => 'Оставить заявку'
        ]
    );
    $APPLICATION->includeComponent(
        'kitchen',
        arParams: [
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
        arParams: [
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
        arParams: [
            'title' => 'Оставьте заявку',
            'desc' => 'Наши специалисты свяжутся с вами в течение одного часа',
            'action' => '',
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
        'kitchen',
        arParams: [
            'title' => 'Материал фасада кухонь',
            'cards' => [
                [
                    'src' => 'img/cards/huitek.png',
                    'alt' => 'плёнка',
                    'title' => 'Плёнка',
                    'desc' => 'Данный материал примечателен своей долговечностью, светоустойчивостью, а также огромным
                        многообразием фактур'
                ],
                [
                    'src' => 'img/cards/classic.png',
                    'alt' => 'Древесная стружка',
                    'title' => 'Древесная стружка',
                    'desc' => 'Фасады из древесной стружки (мелкодисперсная фракция) хороши тем,
                        что их можно отмыть от любой грязи'
                ],
                [
                    'src' => 'img/cards/неоклассика.png',
                    'alt' => 'Шпон',
                    'title' => 'Шпон',
                    'desc' => 'Считается самым дорогостоящим вариантом кухонного гарнитура, так как он получается
                        из ценных древесных пород'
                ],
                [
                    'src' => 'img/cards/huitek.png',
                    'alt' => 'Массив',
                    'title' => 'Массив',
                    'desc' => 'Кухня из массива отличается уникальностью
                        и солидностью, а также придаёт помещению благородный внешний вид'
                ],
                [
                    'src' => 'img/cards/classic.png',
                    'alt' => 'Пластик',
                    'title' => 'Пластик',
                    'desc' => 'Пластик отлично вписывается во все стили дизайна интерьера и позволяет воплотить различные
                        дизайнерские фантазии'
                ],
                [
                    'src' => 'img/cards/неоклассика.png',
                    'alt' => 'Эмаль',
                    'title' => 'Эмаль',
                    'desc' => 'Используя огромную цветовую палитру
                        эмали, вы можете сделать, вашу кухню
                        свежей и яркой'
                ],

            ]
        ]
    );
    $APPLICATION->includeComponent(
        'about',
        arParams: [
            'about' => [
                [
                    'title' => 'О кухнях',
                    'desc1' => 'Наша компания изготавливает кухни
                            по индивидуальному проекту,
                            что позволит самостоятельно выбрать
                            стиль и цвет каждого изделия.',
                    'desc2' => 'У нас вы найдете более 1000 цветов фартуков с фотопечатью и более 100 вариантов дверных
                            ручек,
                            разновидностей фурнитуры, цветов столешниц, фасадов и стеновых изделий.',
                    'button' => 'Заказать',
                ],
                [
                    'title' => 'Доставка',
                    'desc1' => 'Мы организуем транспортировку вашего заказа, и, при необходимости, наши сотрудники смогут сразу
                        же произвести сборку и установку оборудования.',
                    'desc2' => 'У Вы можете быть уверены в том, что все изделия будут перевезены в точном соответствии с
                        установленными
                        правилами перевозки.'
                ],
                [
                    'title' => 'У нас своё
                                производство',
                    'desc1' => 'Компания “МЕБЕЛЬ” создана в апреле 2011 года инженером-технологом Дмитрием Николаевичем
                        Важинским, имеет
                        собственное производство
                        и профессиональное оборудование.',
                    'desc2' => 'Вы можете посетить нас (Тюмень, ул.Калинина, 22/1) в любое удобное для вас время, предварительно
                        записавшись
                        к директору компании через сайт,
                        либо по телефону +7 345 00-00-00.',
                ],


            ],
            'images' => [
                ['src' => 'img/info/about.png', 'alt' => 'about'],
                ['src' => 'img/info/deliver.png', 'alt' => 'deliver'],
                ['src' => 'img/info/kiefer.png', 'alt' => 'kiefer'],
            ],
        ]
    );
    $APPLICATION->includeComponent(
        'offer',
        arParams: [
            'title' => 'Что мы предлагаем',
            'items' => [
                [
                    'src' => 'img/offer/wish-list1.svg',
                    'alt' => 'wishlist',
                    'title' => 'Сделаем по экскизу',
                    'desc' => 'Если у вас есть пожелания, изготовим кухню согласно вашим примерам'
                ],
                [
                    'src' => 'img/offer/smartphone 1.svg',
                    'alt' => 'smartphone',
                    'title' => 'Подстроимся под бюджет',
                    'desc' => 'Для эскиза подберем материалы эконом, стандарт или премиум класса'
                ],
                [
                    'src' => 'img/offer/shield 2 1.svg',
                    'alt' => 'shield',
                    'title' => 'Гарантия 5 лет',
                    'desc' => 'Наша компания занимается изготовлением мебели много лет,
                                мы отвечаем за качество'
                ],
                [
                    'src' => 'img/offer/living-room 1.svg',
                    'alt' => 'living-room',
                    'title' => 'Проект на этапе ремонта',
                    'desc' => 'Предусмотрим все нюансы и дадим рекомендации
                                по расположению элементов кухни'
                ],
            ],
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
