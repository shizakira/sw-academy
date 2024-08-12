import OfferCardComponent from "./OfferCardComponent.js";

const data = JSON.parse(document.querySelector(".offer").dataset.params);

Vue.createApp({
    components: {
        "offer-card-component": OfferCardComponent,
    },
    data() {
        return {
            ...data,
        };
    },
}).mount(".offer");
