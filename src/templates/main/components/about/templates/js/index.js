import DescComponent from "./DescComponent.js";
import ImageCopmonent from "./ImageCopmonent.js";

const data = JSON.parse(document.querySelector(".info").dataset.params);

Vue.createApp({
    components: {
        "desc-component": DescComponent,
        "image-component": ImageCopmonent,
    },
    data() {
        return {
            ...data,
        };
    },
}).mount(".info");
