export default Vue.defineComponent({
    template: `
    <button class="$attr.class">
        <slot></slot>
    </button>
    `,
});
