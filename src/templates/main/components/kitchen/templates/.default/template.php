<section class="kitchen" data-params="<?= htmlspecialchars(json_encode($arParams)) ?>">
    <h2 class="kitchen__title">{{ title }}</h2>
    <div class="kitchen__cards-wrapper">
        <card-component :items="cards"></card-component>
    </div>
</section>

<script type="module" src="templates/main/components/kitchen/templates/js/index.js">

</script>