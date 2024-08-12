import InputComponent from "./InputComponent.js";
import ButtonComponent from "../../../../js/header/ButtonComponent.js";

const data = JSON.parse(document.querySelector(".application").dataset.params);

Vue.createApp({
    components: {
        "input-component": InputComponent,
        "button-component": ButtonComponent,
    },
    data() {
        return {
            ...data,
        };
    },
}).mount(".application");
