<section class="auth">
    <div class="auth__inner">

        <form class="auth__form" action="<?= $arResult['action'] ?>" method="post">
            <h1 class="auth__form-title"><?= $arResult['title'] ?></h1>
            <div class="auth__form-box">
                <?php foreach ($arResult['inputs'] as $input) : ?>
                    <input type="<?= $input['type'] ?>" class="form__input auth__form-input" name="<?= $input['name'] ?>" placeholder="<?= $input['placeholder'] ?>">
                <?php endforeach ?>
            </div>
            <button type="submit" class="button auth__form-submit button_send button_shadow button_orange"><?= $arResult['button'] ?></button>
        </form>
    </div>
</section>