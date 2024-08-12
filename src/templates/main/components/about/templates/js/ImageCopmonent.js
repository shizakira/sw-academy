export default Vue.defineComponent({
    props: ["items"],
    template: `
    <div v-for="item in items" class="img-wrapper img-wrapper_disable">
        <img :src="item.src" :alt="item.alt" class="info__img">
    </div>`,
});
