<section class="welcome">
    <div class="welcome__inner">
        <div class="welcome__order-box">
            <h1 class="welcome__title"><?= $arResult['title'] ?></h1>
            <p class="welcome__desc">
                <?= $arResult['desc'] ?>
            </p>
            <p class="welcome__desc welcome__desc_bold">
                <?= $arResult['desc_bold'] ?>
            </p>
        </div>
        <button class="button button_bigger button_shadow"><?= $arResult['button_text'] ?></button>
    </div>
</section>