export default Vue.defineComponent({
    name: "InputComponent",
    props: ["items"],
    template: `
    <input v-for="item in items" class="form__input" 
        :type="item.type" 
        :placeholder="item.placeholder" 
        :name="item.name">
    `,
});
