</main>
<style>
    .footer {
        background: #515151;
        color: #FFFFFF;
    }

    .footer__inner {
        padding: 30px 140px;
        display: flex;
        justify-content: space-between;
    }

    .footer__menu,
    .footer__contacts {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        gap: 5px;
    }

    .footer__menu-title,
    .footer__contacts-title {
        font-style: normal;
        font-weight: 300;
        font-size: 20px;
        line-height: 26px;
        margin-bottom: 15px;
    }

    .footer__menu-item,
    .footer__contacts-item {
        font-weight: 300;
        font-size: 16px;
        line-height: 26px;
    }

    .footer__inner_line {
        padding: 24px 140px;
        border-top: 1px solid rgba(179, 179, 179, 0.1);
    }

    .copyright {
        display: flex;
        gap: 200px;
    }

    .copyright__item {
        font-weight: 300;
        font-size: 16px;
        line-height: 26px;
        color: #000000;
    }

    .copyright__item_orange {
        color: #F79C1B;
    }
</style>
<footer class="footer">
    <div class="footer__inner">
        <div class="logo">
            <span class="logo__heading">Мебель</span>
            <p class="logo__desc">Центр мебельных технологий</p>
        </div>
        <div class="footer__menu">
            <h4 class="footer__menu-title">Меню</h4>
            <a href="#" class="footer__menu-item">Шкафы купе</a>
            <a href="#" class="footer__menu-item">Кухни</a>
            <a href="#" class="footer__menu-item">Торговое оборудование</a>
            <a href="#" class="footer__menu-item">О компании</a>
            <a href="#" class="footer__menu-item">Контакты</a>
        </div>
        <div class="footer__contacts">
            <h4 class="footer__contacts-title">Контакты</h4>
            <a class="footer__contacts-item" href="mailto:info@mebel.ru">info@mebel.ru</a>
            <a class="footer__contacts-item" href="https://yandex.ru/maps/55/tyumen/house/ulitsa_kalinina_22_1/YkwYcwZlTkQCQFttfX1yeHRnbQ==/?ll=65.515715%2C57.139849&z=17.14">г.Тюмень,
                ул. Калинина, 22/1</a>
            <a class="footer__contacts-item" href="tel:+7 (3452) 00-00-00">+7 (3452) 00-00-00</a>
        </div>
        <button class=" button button_change-bg"><a href="autorization.html" target="_blank">Авторизоваться</a></button>
    </div>
    <div class="footer__inner footer__inner_line">
        <div class="copyright">
            <span class="copyright__item">2024 “Мебель.ру” Все права защищены.</span>
            <span class="copyright__item copyright__item_orange">Политика конфиденциальности</span>
            <span class="copyright__item">
                Разработка сайта интернет компания
                “SunWeb”
            </span>
        </div>
    </div>
</footer>