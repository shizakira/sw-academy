</main>
<footer class="footer" data-params="<?= htmlspecialchars(json_encode($arParams)) ?>">
    <div class="footer__inner">
        <div class="logo">
            <span class="logo__heading">{{title}}</span>
            <p class="logo__desc">{{desc}}</p>
        </div>
        <div class="footer__menu">
            <h4 class="footer__menu-title">{{menu_title}}</h4>
            <a v-for="item in menu_items" :href="item.href" class="footer__menu-item">{{item.name}}</a>
        </div>
        <div class="footer__contacts">
            <h4 class="footer__contacts-title">{{contacts_title}}</h4>
            <a v-for="item in contacts_items" :href="item.href" class="footer__contacts-item">{{item.name}}</a>
        </div>
        <button class=" button button_change-bg"><a href="../../../../authorization.php" target="_blank">{{footer_button}}</a></button>
    </div>
    <div class="footer__inner footer__inner_line">
        <div class="copyright">
            <span v-for="item in copyright_items" :class="['copyright__item', { 'copyright__item_orange': item.isOrange }]">{{item.name}}</span>
        </div>
    </div>
</footer>

<script type="module" src="templates/main/js/footer.js">
</script>