</main>
<footer class="footer">
    <div class="footer__inner">
        <div class="logo">
            <span class="logo__heading"><?= $arResult['logo_heading'] ?></span>
            <p class="logo__desc"><?= $arResult['logo_desc'] ?></p>
        </div>
        <div class="footer__menu">
            <h4 class="footer__menu-title"><?= $arResult['menu_title'] ?></h4>
            <?php foreach ($arResult['menu_items'] as $item) : ?>
                <a href="<?= $item['href'] ?>" class="footer__menu-item"><?= $item['name'] ?></a>
            <?php endforeach ?>
        </div>
        <div class="footer__contacts">
            <h4 class="footer__contacts-title"><?= $arResult['contacts_title'] ?></h4>
            <?php foreach ($arResult['contacts_items'] as $item) : ?>
                <a class="footer__contacts-item" href="<?= $item['href'] ?>"><?= $item['name'] ?></a>
            <?php endforeach ?>
        </div>
        <button class=" button button_change-bg"><a href="../../../../authorization.php" target="_blank"><?= $arResult['footer_button'] ?></a></button>
    </div>
    <div class="footer__inner footer__inner_line">
        <div class="copyright">
            <?php foreach ($arResult['copyright_items'] as $item) : ?>
                <span class="copyright__item <?= $item['isOrange'] ? 'copyright__item_orange' : '' ?>"><?= $item['name'] ?></span>
            <?php endforeach ?>
        </div>
    </div>
</footer>