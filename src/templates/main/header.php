<header class="header" data-params="<?= htmlspecialchars(json_encode($arParams)) ?>">
    <div class="header__inner">
        <div class="logo">
            <span class="logo__heading"><a href="/">{{title}}</a></span>
            <p class="logo__desc">{{desc}}</p>
        </div>
        <menu-component :items="navbar_items"></menu-component>

        <div class="header__phone">{{phone}}</div>
        <button-component class="button button_change-bg">{{button}}</button-component>
    </div>
</header>

<script type="module" src="templates/main/js/header/index.js"></script>

<main>