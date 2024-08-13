export default Vue.defineComponent({
    props: ["title", "desc", "desc_bold"],
    template: `
    <div class="welcome__order-box">
        <h1 class="welcome__title">{{ title }}</h1>
        <p class="welcome__desc">{{ desc }}</p>
        <p class="welcome__desc welcome__desc_bold">{{ desc_bold }}</p>
    </div>
    `,
});
