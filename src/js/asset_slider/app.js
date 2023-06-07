// const bar = document.querySelector(".bar span");

// スライドの枚数
const slide = document.querySelectorAll('.asset__doll-slider .swiper-slide');
const slideLength = slide.length;
console.log(slideLength);



const dollSwiper = new Swiper('.asset__doll-slider', {
  loop: true,
  effect: 'fade',
  fadeEffect: {
    crossFade: true,
  },
  thumbs: {
    swiper: '.asset__thumb-slider',
  },
  autoplay: {
    delay: 6000,
    disableOnInteraction: false,
  },
  on: {
    init: function(){
      console.log("初期化");
      var currentSlideIndex = this.realIndex + 1;
      console.log("初期表示のスライド番号: " + currentSlideIndex);
    },
    slideChange: function() {
      var currentSlideIndex = this.realIndex + 1;
      console.log("現在のスライド番号: " + currentSlideIndex);
    },
    slideChangeTransitionEnd: () => {
      console.log("end");
    },
  },
});

// 切り替わるまでの時間
const delayTime = dollSwiper.params.autoplay.delay / 1000;
console.log(delayTime);

const thumbSwiper = new Swiper('.asset__thumb-slider', {
  slidesPerView: 'auto',
  freeMode: true,
  watchSlidesVisibility: true,
  watchSlidesProgress: true,
});