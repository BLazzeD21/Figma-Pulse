$(document).ready(function() {
  $(".slider__inner").slick({
    speed: 1000,
    slidesToShow: 1,
    // autoplay: true,
    // autoplaySpeed: 2000,
    prevArrow: `<button type="button" class="slick-prev">
    <img src = "../icons/arrows/prev-arrow.png">
    </button>`,
    nextArrow: `<button type="button" class="slick-next">
    <img src = "../icons/arrows/next-arrow.png">
    </button>`,
  });
});
