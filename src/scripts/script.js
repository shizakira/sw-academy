function toggleMenu() {
    let menu = document.getElementById("header__navbar-mobile");
    if (menu.classList.contains("header__navbar-mobile--show")) {
        menu.classList.remove("header__navbar-mobile--show");
        setTimeout(function () {
            menu.style.display = "none";
        }, 100);
    } else {
        menu.style.display = "flex";
        setTimeout(function () {
            menu.classList.add("header__navbar-mobile--show");
        }, 10);
    }
}
