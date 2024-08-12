<section class="offer" data-params="<?= htmlspecialchars(json_encode($arParams)) ?>">
    <h2 class="offer__title">{{title}}</h2>
    <div class="offer__inner">
        <offer-card-component :items="items"></offer-card-component>
    </div>
</section>

<script type="module" src="templates/main/components/offer/templates/js/index.js"></script>