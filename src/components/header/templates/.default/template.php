<header class="header">
    <div class="header__inner">
        <div class="logo">
            <span class="logo__heading"><?= $arResult['logo_heading'] ?></span>
            <p class="logo__desc"><?= $arResult['logo_desc']  ?></p>
        </div>
        <nav class="header__navbar">
            <?php foreach ($arResult['navbar_items'] as $item) : ?>
                <a href="<?= $item['href'] ?>" class="header__item <?= $item['isActive'] ? 'header__item_active' : '' ?>"><?= $item['name'] ?></a>
            <?php endforeach ?>
        </nav>
        <div class="header__phone"><?= $arResult['header_phone'] ?></div>
        <button class="button button_change-bg"><?= $arResult['button'] ?></button>
        <button class="dropdown-menu" onclick="toggleMenu()">
            <img src="img/dropdown-menu.svg" alt="dropdown-menu">
        </button>
    </div>
</header>
<main class="main">