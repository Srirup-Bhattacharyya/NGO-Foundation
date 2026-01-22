document.addEventListener("DOMContentLoaded", () => {
  let heroMain = document.querySelector("#hero")
  if (heroMain) {
    var swiper = new Swiper(".heroSwiper", {
      spaceBetween: 30,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      autoplay: {
        delay: 5500,
        disableOnInteraction: false,
      },
    })
  }
})
