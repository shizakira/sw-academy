import ButtonComponent from "../../../../js/header/ButtonComponent.js";
import InputComponent from "../../../application/templates/js/InputComponent.js";

const data = JSON.parse(document.querySelector(".auth").dataset.params);

Vue.createApp({
    components: {
        "button-component": ButtonComponent,
        "input-component": InputComponent,
    },
    data() {
        return {
            ...data,
            form: {
                name: "",
                tel: "",
            },
        };
    },
}).mount(".auth");
