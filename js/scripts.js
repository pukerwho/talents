$('.toogle-menu').on('click', function(e) {
  e.preventDefault;
  $(this).toggleClass('toogle-menu_active');
  $('.slide-menu').toggleClass('slide-menu_active');
  $('.menu li').toggleClass('animate-left');
});

$(window).scroll(function(){
  var h_scroll = $(this).scrollTop();
  if (h_scroll > 56) {
    $('header').addClass('header__fixed')
  } else {
    $('header').removeClass('header__fixed')
  }
})

// var swiperWelcome = new Swiper('.swiper-welcome-slider', {
//   slidesPerView: 1,
//   spaceBetween: 35,
//   loop: true,
//   speed: 3000,
//   autoplay: true,
//   autoplayDisableOnInteraction: true,
//   centeredSlides: true,
//   effect: 'fade',
// });

var timerId = setInterval(function() {
  $('video').each(function(){
    if ($(this).is(":in-viewport")) {
      $(this)[0].play();
    } else {
      $(this)[0].pause();
    }
  })
}, 500);

var setId = setTimeout(function() {
  $('.hero-slider').slick({
    slidesToShow: 1,
    prevArrow: $(".themes-carousel-controls .prev"),
    nextArrow: $(".themes-carousel-controls .next"),
    autoplay: true,
    dots: false,
    autoplaySpeed: 5000,
    fade: true
  });
}, 500);

var talentSwiper = new Swiper('.swiper-talent', {
  effect: 'coverflow',
  grabCursor: true,
  centeredSlides: true,
  slidesPerView: 'auto',
  coverflowEffect: {
    rotate: 20,
    stretch: 0,
    depth: 350,
    modifier: 1,
    slideShadows: true
  },
  pagination: {
    el: ".swiper-pagination"
  }
});
