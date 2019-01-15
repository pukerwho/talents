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

var swiperWelcome = new Swiper('.swiper-welcome', {
  slidesPerView: 3,
  spaceBetween: 35,
  loop: true,
  loopedSlides: 16,
  speed: 700,
  autoplay: true,
  autoplayDisableOnInteraction: true,
  centeredSlides: true
});

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
