<section class="welcome" data-params="<?= htmlspecialchars(json_encode($arParams)) ?>">
    <div class="welcome__inner">
        <div class="welcome__order-box">
            <h1 class="welcome__title">{{ title }}</h1>
            <p class="welcome__desc">{{ desc }}</p>
            <p class="welcome__desc welcome__desc_bold">{{ desc_bold }}</p>
        </div>
        <button class="button button_bigger button_shadow">{{ button_text }}</button>
    </div>
</section>

<script type="module" src="templates/main/components/welcome/templates/.default/welcome.js">

</script>