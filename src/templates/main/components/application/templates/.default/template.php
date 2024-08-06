<section class="application">
    <h2 class="application__title"><?= $arResult['application_title'] ?></h2>
    <p class="application__desc">
        <?= $arResult['application_title'] ?>
    </p>
    <form class="form" action="<?= $arResult['form_action'] ?>" method="post">
        <div class="form__input-inner">
            <?php foreach ($arResult['form_inputs'] as $input) : ?>
                <input class="form__input" type="<?= $input['type'] ?>" placeholder="<?= $input['placeholder'] ?>" name="<?= $input['name'] ?>">
            <?php endforeach ?>
        </div>
        <button class="button button_send button_shadow" type="submit"><?= $arResult['form_button'] ?></button>
    </form>
</section>