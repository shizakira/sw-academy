<section class="application" data-params="<?= htmlspecialchars(json_encode($arParams)) ?>">
    <h2 class="application__title">{{title}}</h2>
    <p class="application__desc">{{desc}}</p>
    <form class="form" :action="action" method=" post">
        <div class="form__input-inner">
            <input v-for="input in inputs" class="form__input" :type="input.type" :placeholder="input.placeholder" :name="input.name">
        </div>
        <button class="button button_send button_shadow" type="submit">{{button}}</button>
    </form>
</section>
<script type="module" src="templates/main/components/application/templates/.default/application.js"></script>