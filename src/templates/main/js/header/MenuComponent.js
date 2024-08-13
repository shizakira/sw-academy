export default Vue.defineComponent({
    props: ["items"],
    template: `
    <nav class="header__navbar">
        <a v-for="item in items" :key="item.href":href="item.href" :class="['header__item', { 'header__item_active': item.is_active }]">
            {{ item.text }}
        </a>
    </nav>
    `,
});
