const data = JSON.parse(document.querySelector(".footer").dataset.params);

Vue.createApp({
    data() {
        return {
            ...data,
        };
    },
}).mount(".footer");
