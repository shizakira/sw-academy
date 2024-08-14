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
            form: {
                name: "",
                tel: "",
            },
        };
    },
    methods: {
        submit(event) {
            event.preventDefault();

            APP.runComponentAction(
                "application",
                "create",
                JSON.stringify(this.form)
            )
                .then((data) => {
                    alert(`ID: ${data}`);
                })
                .catch((error) => {
                    alert("Error:", error);
                });
        },
    },
}).mount(".application");
