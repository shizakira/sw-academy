    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Noto+Music&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap');

        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "Rubik", sans-serif;
            font-weight: 500;
            font-style: normal;
            color: #1A1A1A;
            font-size: 16px;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        main {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 80px;
            padding-bottom: 80px;
        }

        /* Header */
        .header {
            position: fixed;
            width: 100%;
            background-color: rgba(26, 26, 26, 0.65);
            color: #fff;
            z-index: 1;
            height: 106px;
            display: flex;
            justify-content: center;
        }

        .header__inner {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 40px;
            width: 100%;


            padding: 0 140px;
        }

        .logo {}

        .logo__heading {
            font-weight: 600;
            font-size: 43px;
            color: #F79C1B;
            text-transform: uppercase;
        }

        .logo__desc {
            margin: 0;
            font-weight: 300;
            font-size: 12px;
            color: rgba(246, 246, 246, 0.5);
        }

        .header__navbar {
            display: flex;
            gap: 30px;
            flex-grow: 1;
        }

        .header__item {
            font-weight: 300;
            font-size: 16px;
        }

        .header__item:hover {
            text-decoration: underline;
            text-decoration-color: #F79C1B;
            text-underline-offset: 5px;
        }

        .header__item_active {
            font-weight: 600;
            font-size: 16px;
        }

        .header__phone {
            font-size: 16px;
        }

        .dropdown-menu {
            display: none;
            background: none;
            border: none;
            cursor: pointer;
        }

        .header__navbar-mobile {
            display: none;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            position: absolute;
            top: 92px;
            left: 0;
            width: 100%;
            z-index: 1000;
            background: #fff;
            height: 0;
            padding-top: 20px;
            color: #000000;
            transition: height 0.3s;
        }

        .header__navbar-mobile_show {
            display: flex;
            height: 820px;
        }

        .header__navbar-mobile-inner {
            padding: 106px 0;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;

        }


        .button__inner {
            display: flex;
            flex-direction: column;
            gap: 35px;
        }

        .button {
            cursor: pointer;
            font-family: inherit;
            font-style: normal;
            width: 160px;
            height: 32px;
            border: 1px solid #F79C1B;
            background: none;

            font-size: 12px;
            color: #F79C1B;

            transition: all 0.4s;
        }

        .button_change-bg:hover {
            background: #F79C1B;
            color: #fff;
        }

        .button_shadow:hover {
            box-shadow: 4px 4px 11px 1px #525252;
        }

        .button_bigger {
            width: 240px;
            height: 50px;
            left: 600px;
            bottom: 137px;

            background: #F79C1B;

            font-weight: 500;
            font-size: 16px;
            letter-spacing: 0.02em;
            color: #F6F6F6;
        }

        .button_send {
            width: 250px;
            height: 50px;
            background: #F79C1B;
            color: #F6F6F6;

            font-weight: 500;
            font-size: 16px;
            letter-spacing: 0.02em;
        }

        .main {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 80px;
            padding-bottom: 80px;
        }
    </style>
    <header class="header">
        <div class="header__inner">
            <div class="logo">
                <span class="logo__heading">Мебель</span>
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
    </header>
    <main>