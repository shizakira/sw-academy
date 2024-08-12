const headerElement = document.querySelector(".header");
const dataParams = JSON.parse(headerElement.getAttribute("data-params"));

Vue.createApp({
    data() {
        return {
            ...dataParams,
        };
    },
}).mount(".header");
