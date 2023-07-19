$(document).ready(function() {
  $(".slider__inner").slick({
    speed: 2000,
    slidesToShow: 1,
    autoplay: true,
    autoplaySpeed: 3000,
    prevArrow: `<button type="button" class="slick-prev">
    <img src = "icons/arrows/prev-arrow.png">
    </button>`,
    nextArrow: `<button type="button" class="slick-next">
    <img src = "icons/arrows/next-arrow.png">
    </button>`,
    responsive: [
      {
        breakpoint: 575,
        settings: {
          arrows: false,
          dots: true,
        },
      },
    ],
  });

  $("ul.catalog__tabs").on("click", "li:not(.catalog__tab_active)", function() {
    $(this)
      .addClass("catalog__tab_active").siblings()
      .removeClass("catalog__tab_active")
      .closest("div.container").find("div.catalog__content")
      .removeClass("catalog__content_active")
      .eq($(this).index()).addClass("catalog__content_active");
  });
});
