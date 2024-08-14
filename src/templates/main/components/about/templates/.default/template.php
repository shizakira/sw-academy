<section class="info" data-params="<?= htmlspecialchars(json_encode($arParams)) ?>">
    <desc-component :items="about"></desc-component>
    <image-component :items="images"></image-component>
</section>

<script type="module" src="templates/main/components/about/templates/js/index.js"></script>
