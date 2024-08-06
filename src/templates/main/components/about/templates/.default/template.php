<section class="info">
    <?php foreach ($arResult['about'] as $block) : ?>
        <div class="about">
            <div class="about__inner about__inner_right">
                <h2 class="about__title"><?= $block['title'] ?></h2>
                <div class="about__desc-wrapper">
                    <p class="about__desc">
                        <?= $block['desc1'] ?></p>
                    <p class="about__desc">
                        <?= $block['desc2'] ?>
                    </p>
                </div>
                <?php if (isset($block['button'])) : ?>
                    <button class="button button_send button_shadow"><?= $block['button'] ?></button>
                <?php endif ?>
            </div>
        </div>
    <?php endforeach ?>

    <?php foreach ($arResult['images'] as $img) :  ?>
        <div class="img-wrapper img-wrapper_disable">
            <img src="<?= $img['src'] ?>" alt="<?= $img['alt'] ?>" class="info__img">
        </div>
    <?php endforeach ?>
</section>