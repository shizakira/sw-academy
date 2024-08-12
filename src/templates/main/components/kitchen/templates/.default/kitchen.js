document.addEventListener("DOMContentLoaded", () => {
    document.querySelectorAll(".kitchen").forEach((element) => {
        const dataParams = JSON.parse(element.getAttribute("data-params"));

        Vue.createApp({
            data() {
                return {
                    ...dataParams,
                };
            },
        }).mount(element);
    });
});
