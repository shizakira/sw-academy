import ButtonComponent from "../header/ButtonComponent.js";

const data = JSON.parse(document.querySelector(".footer").dataset.params);

Vue.createApp({
    components: {
        "button-component": ButtonComponent,
    },
    data() {
        return {
            ...data,
        };
    },
}).mount(".footer");
