import WindowComponent from "./WindowComponent.js";
import ButtonComponent from "../../../../js/header/ButtonComponent.js";

const data = JSON.parse(document.querySelector(".welcome").dataset.params);

Vue.createApp({
    components: {
        "window-component": WindowComponent,
        "button-component": ButtonComponent,
    },
    data() {
        return {
            ...data,
        };
    },
}).mount(".welcome");
