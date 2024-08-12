<section class="auth" data-params="<?= htmlspecialchars(json_encode($arParams)) ?>">
    <div class="auth__inner">

        <form class="auth__form" :action="action" method="post">
            <h1 class="auth__form-title">{{title}}</h1>
            <div class="auth__form-box">
                <input-component :items="inputs"></input-component>
            </div>
            <button-component type="submit" class="button auth__form-submit button_send button_shadow button_orange">{{button}}</button-component>
        </form>
    </div>
</section>

<script type="module" src="templates/main/components/authorization/templates/js/index.js"></script>