<section class="offer">
    <h2 class="offer__title"><?= $arResult['title'] ?></h2>
    <div class="offer__inner">
        <?php foreach ($arResult['items'] as $item) : ?>
            <div class="offer__item">
                <img src="<?= $item['src'] ?>" alt="<?= $item['alt'] ?>" class="offer__item-img">
                <h3 class="offer__item-title"><?= $item['title'] ?></h3>
                <p class="offer__item-desc"><?= $item['desc'] ?></p>
            </div>
        <?php endforeach ?>
    </div>
</section>