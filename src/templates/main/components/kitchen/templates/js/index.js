import CardComponent from "./CardComponent.js";

document.addEventListener("DOMContentLoaded", () => {
    document.querySelectorAll(".kitchen").forEach((element) => {
        const data = JSON.parse(element.dataset.params);
        Vue.createApp({
            components: {
                "card-component": CardComponent,
            },
            data() {
                return {
                    ...data,
                };
            },
        }).mount(element);
    });
});
