let currentWidth = document.documentElement.clientWidth;
let sliderMode = false;

$(document).ready(function() {
  $('.rooms__list').slick({
    centerMode: true,
    slidesToShow: 1,
    arrows: false,
    infinite: true
  });
});

//   sliderMode = true;

//   if(currentWidth > 545) {
//     $('.rooms__list').slick('unslick');
//     sliderMode = false;
//   }
// });



//   window.addEventListener('resize', () => {
//     currentWidth = document.documentElement.clientWidth;
//     if(currentWidth > 545 && sliderMode) {
//       $('.rooms__list').slick('unslick');
//       sliderMode = false;
//     } 

//     if(currentWidth < 545 && !sliderMode) {
//       $('.rooms__list').slick({
//         centerMode: true,
//         slidesToShow: 1,
//         arrows: false ,
//         infinite: true
//       });
//       sliderMode = true;
//     } 

//   })