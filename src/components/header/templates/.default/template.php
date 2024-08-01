<header class="header">
    <div class="header__inner">
        <div class="logo">
            <span class="logo__heading"><?= $arResult['logo__heading'] ?></span>
            <p class="logo__desc">Центр мебельных технологий</p>
        </div>
        <nav class="header__navbar">
            <a href="#" class="header__item">Шкафы-купе</a>
            <a href="#" class="header__item">Торговая мебель</a>
            <a href="#" class="header__item header__item_active">Кухни</a>
            <a href="#" class="header__item">Контакты</a>
        </nav>
        <div class="header__phone">+7 3452 00-00-00</div>
        <button class="button button_change-bg">Оставить заявку</button>
        <button class="dropdown-menu" onclick="toggleMenu()">
            <img src="img/dropdown-menu.svg" alt="dropdown-menu">
        </button>

        <nav class="header__navbar-mobile" id="header__navbar-mobile">
            <div class="header__navbar-mobile-inner">
                <a href="#" class="header__item">Шкафы-купе</a>
                <a href="#" class="header__item">Торговая мебель</a>
                <a href="#" class="header__item header__item_active">Кухни</a>
                <a href="#" class="header__item">Контакты</a>

                <div class="button__inner">
                    <button class="button button_mobile button_orange">Перезвоните мне</button>
                    <button class="button button_mobile"><a href="autorization.html">Авторизоваться</a></button>
                </div>

            </div>
        </nav>
    </div>
</header>