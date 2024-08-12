const headerElement = document.querySelector(".footer");
const dataParams = JSON.parse(headerElement.getAttribute("data-params"));

Vue.createApp({
    data() {
        return {
            ...dataParams,
        };
    },
}).mount(".footer");
