export default Vue.defineComponent({
    props: {
        modelValue: {
            type: String,
            required: true,
        },
        item: {
            type: Object,
            required: true,
        },
    },
    template: `
    <input class="form__input" 
        :value="modelValue"
        @input="$emit('update:modelValue', $event.target.value)"
        :type="item.type" 
        :placeholder="item.placeholder" 
        :name="item.name">
    `,
});
