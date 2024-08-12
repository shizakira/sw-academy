import MenuComponent from "./MenuComponent.js";
import ButtonComponent from "./ButtonComponent.js";

const data = JSON.parse(document.querySelector(".header").dataset.params);

Vue.createApp({
    components: {
        "menu-component": MenuComponent,
        "button-component": ButtonComponent,
    },
    data() {
        return {
            ...data,
        };
    },
}).mount(".header");
