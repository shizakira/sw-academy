<section class="offer" data-params="<?= htmlspecialchars(json_encode($arParams)) ?>">
    <h2 class="offer__title">{{title}}</h2>
    <div class="offer__inner">
        <div v-for="item in items" class="offer__item">
            <img :src="item.src" :alt="item.alt" class="offer__item-img">
            <h3 class="offer__item-title">{{item.title}}</h3>
            <p class="offer__item-desc">{{item.desc}}</p>
        </div>
    </div>
</section>

<script type="module" src="templates/main/components/offer/templates/.default/offer.js"></script>