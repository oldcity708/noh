/** GSAP */
import {
  gsap,
} from 'gsap';

gsap.defaults({ overwrite: true });

let ri = 0; // realindexを保持

const thumb_progress = function(i) {
  const this_slider_bar = $('.progress-bar').eq(i);
  gsap.to(this_slider_bar, {
    duration: 3, //秒数
    width: "100%"
  })
}


const thumbSwiper = new Swiper('.asset__thumb-slider', {
  slidesPerView: 'auto',
  watchSlidesVisibility: true,
  watchSlidesProgress: true,
  autoplay: {
    delay: 3000,
  }
});

$(document).on('click', '.asset__thumb-slider__slide', function(e) {
  if($(this).index() != ri) {
    gsap.set('.progress-bar', {width:0});
  }
});

new Swiper('.asset__doll-slider', {
  loop: true,
  effect: 'fade',
  fadeEffect: {
    crossFade: true,
  },
  thumbs: {
    swiper: thumbSwiper
  },
  autoplay: {
    delay: 3000,
    disableOnInteraction: false,
  },
  on : {
    init: function() {
      thumb_progress(0);
      // console.log(ri);
    },
    beforeLoopFix: function() {
      gsap.set('.progress-bar', {width:0});
    },
    slideChangeTransitionEnd: function(e) {
      ri = e.realIndex;
      thumb_progress(e.realIndex);
    }
  }
});

