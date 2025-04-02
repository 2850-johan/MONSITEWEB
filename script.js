const menuOpenButton = document.querySelector("#menu-open-button");
const menuCloseButton = document.querySelector("#menu-close-button");
/* Toggle Mobile menu visibility */
menuOpenButton.addEventListener("click", () => {
    document.body.classList.toggle("show-mobile-menu");
});

//Close the menu when clicking on the close button
menuCloseButton.addEventListener("click", () => menuOpenButton.click());