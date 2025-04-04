const menuOpenButton = document.querySelector("#menu-open-button");
const menuCloseButton = document.querySelector("#menu-close-button");
/* Toggle Mobile menu visibility */
menuOpenButton.addEventListener("click", () => {
    document.body.classList.toggle("show-mobile-menu");
});

//Close the menu when clicking on the close button
menuCloseButton.addEventListener("click", () => menuOpenButton.click());

//Initialize Swiper
const swiper = new Swiper('.slider-wrapper', {
    loop: true,
    // permet de meyttre le curseur
    grabCursor : true,
    spacebetween: 25,
  
    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
        dynamicBullets: true, // pemet de rendre dynamique les images
    },
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },

    // Responsive breakpoints
    breakpoints: {
        0: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 2,
        },
        1024: {
            slidesPerView: 3,
        },
    },
  });