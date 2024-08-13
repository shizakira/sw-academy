<section class="welcome" data-params="<?= htmlspecialchars(json_encode($arParams)) ?>">
    <div class="welcome__inner">
        <window-component :title="title" :desc="desc" :desc_bold="desc_bold"></window-component>
        <button-component class="button button_bigger button_shadow">{{ button_text }}</button-component>
    </div>
</section>

<script type="module" src="templates/main/components/welcome/templates/js/index.js"></script>