<header class="header" data-params="<?= htmlspecialchars(json_encode($arParams)) ?>">
    <div class=" header__inner">
        <div class="logo">
            <span class="logo__heading"><a href="/">{{title}}</a></span>
            <p class="logo__desc">{{desc}}</p>
        </div>
        <nav class="header__navbar">
            <a v-for="item in navbar_items"
                :href="item.href"
                :class="['header__item', { 'header__item_active': item.is_active }]">
                {{item.text}}
            </a>
        </nav>
        <div class="header__phone">{{phone}}</div>
        <button class="button button_change-bg">{{button}}</button>
</header>

<script type="module" src="templates/main/js/header.js">
</script>

<main>