<section class="application" data-params="<?= htmlspecialchars(json_encode($arParams)) ?>">
    <h2 class="application__title">{{title}}</h2>
    <p class="application__desc">{{desc}}</p>
    <form class="form" :action="action" method="POST" @submit="submit">
        <div class="form__input-inner">
            <input-component
                v-for="input in inputs"
                :key="input.name"
                v-model="form[input.name]"
                :item="input" />
        </div>
        <button-component class="button button_send button_shadow" type="submit">{{button}}</button-component>
    </form>
</section>
<script type="module" src="templates/main/components/application/templates/js/index.js"></script>
