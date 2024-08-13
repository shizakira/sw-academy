export default Vue.defineComponent({
    props: ["items"],
    template: `
    <div v-for="item in items" class="card">
        <div class="img-wrapper">
            <img :src="item.src" :alt="item.alt" class="card__img">
        </div>
        <h3 class="card__title">{{item.title}}</h3>
        <p class="card__desc">{{item.desc}}</p>
    </div>
    `,
});
