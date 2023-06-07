// const bar = document.querySelector(".bar span");

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
    delay: 3000,
    disableOnInteraction: false,
  },
});

const thumbSwiper = new Swiper('.asset__thumb-slider', {
  slidesPerView: 'auto',
  freeMode: true,
  watchSlidesVisibility: true,
  watchSlidesProgress: true,
  autoplay: {
    delay: 3000,
    disableOnInteraction: false,
  },
  on: {
    init: function() {
      var progressBars = document.querySelectorAll('.progress-bar');
      var slides = this.slides;

      for (var i = 0; i < slides.length; i++) {
        var slide = slides[i];
        var progressBar = progressBars[i];
        var progress = (i + 1) / slides.length * 100; // プログレスバーの進捗を計算

        progressBar.style.width = progress + '%'; // プログレスバーの幅を設定
      }
    }
  }
});