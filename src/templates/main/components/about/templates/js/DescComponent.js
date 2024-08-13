import ButtonComponent from "../../../../js/header/ButtonComponent.js";

export default Vue.defineComponent({
    components: {
        "button-component": ButtonComponent,
    },
    props: ["items"],
    template: `
    <div v-for="item in items" class="about">
    <div class="about__inner about__inner_right">
        <h2 class="about__title">{{item.title}}</h2>
        <div class="about__desc-wrapper">
            <p class="about__desc">
                {{item.desc1}}
            </p>
            <p class="about__desc">
                {{item.desc2}}
            </p>
        </div>
        <button-component v-if="item.button" class="button button_send button_shadow">{{item.button}}</button-component>
    </div>
</div>`,
});
