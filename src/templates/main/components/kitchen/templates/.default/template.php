<section class="kitchen">
    <h2 class="kitchen__title"><?= $arResult['title'] ?></h2>
    <div class="kitchen__cards-wrapper">
        <?php foreach ($arResult['cards'] as $card) : ?>
            <div class="card">
                <div class="img-wrapper">
                    <img src="<?= $card['src'] ?>" alt="<?= $card['alt'] ?>" class="card__img">
                </div>
                <h3 class="card__title"><?= $card['title'] ?></h3>
                <p class="card__desc"><?= $card['desc'] ?></p>
            </div>
        <?php endforeach ?>
    </div>
</section>