  
// var screenWidth = document.documentElement.clientWidth;
// var sliderOn = true;


// var swiper = new Swiper('.swiper-container', {
//   slidesPerView: '2',
//   centeredSlides: true,
//   spaceBetween: 10,
//   pagination: {
//     el: '.swiper-pagination',
//     clickable: true,
//   },
// });

// if (screenWidth > 730) {
//   swiper.destroy(true, true);
//   sliderOn = false;
//   document.body.classList.add('slider-off');
// }

// window.addEventListener('resize', () => {
//   screenWidth = document.documentElement.clientWidth;

//   if(screenWidth > 730 && sliderOn) {
//     swiper.destroy(false, true);
//     sliderOn = false;
//     document.body.classList.add('slider-off');
//   }
  
//   if(screenWidth < 730 && !sliderOn) {
//     swiper = new Swiper('.swiper-container', {
//       slidesPerView: '2',
//       centeredSlides: true,
//       spaceBetween: 10,
//       pagination: {
//         el: '.swiper-pagination',
//         clickable: true,
//       },
//     });

//     sliderOn = true;
//     document.body.classList.remove('slider-off');
//   }
// });

