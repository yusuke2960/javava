//javascriptの記述

$('.slider').slick({
  autoplay: true,
  dots: true,
  arrows: false,
  fade: true,
  cssEase: 'linear'
});

$('.autoplay').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 5000,
});