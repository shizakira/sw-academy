<section class="kitchen" data-params="<?= htmlspecialchars(json_encode($arParams)) ?>">
    <h2 class="kitchen__title">{{ title }}</h2>
    <div class="kitchen__cards-wrapper">
        <div v-for="card in cards" class="card">
            <div class="img-wrapper">
                <img :src="card.src" :alt="card.alt" class="card__img">
            </div>
            <h3 class="card__title">{{card.title}}</h3>
            <p class="card__desc">{{card.desc}}</p>
        </div>
    </div>
</section>

<script type="module" src="templates/main/components/kitchen/templates/.default/kitchen.js">

</script>