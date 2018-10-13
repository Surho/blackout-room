let currentWidth = document.documentElement.clientWidth;
let sliderMode = false;

$(document).ready(function() {
  $('.rooms__list').slick({
    centerMode: true,
    slidesToShow: 1,
    arrows: false
  });

  sliderMode = true;

  if(currentWidth > 560) {
    $('.rooms__list').slick('unslick');
    sliderMode = false;
  }
});



  window.addEventListener('resize', () => {
    currentWidth = document.documentElement.clientWidth;
    console.log(currentWidth);
    if(currentWidth > 560 && sliderMode) {
      $('.rooms__list').slick('unslick');
      sliderMode = false;
    } 

    if(currentWidth < 560 && !sliderMode) {
      $('.rooms__list').slick({
        centerMode: true,
        centerPadding: '50px',
        slidesToShow: 1,
        arrows: false
      });
      sliderMode = true;
    } 

  })