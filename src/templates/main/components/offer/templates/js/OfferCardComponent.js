export default Vue.defineComponent({
    props: ["items"],
    template: `
    <div v-for="item in items" class="offer__item">
        <img :src="item.src" :alt="item.alt" class="offer__item-img">
        <h3 class="offer__item-title">{{item.title}}</h3>
        <p class="offer__item-desc">{{item.desc}}</p>
    </div>
    `,
});
