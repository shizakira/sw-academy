const headerElement = document.querySelector(".welcome");
const dataParams = JSON.parse(headerElement.getAttribute("data-params"));

Vue.createApp({
    data() {
        return {
            ...dataParams,
        };
    },
}).mount(".welcome");
