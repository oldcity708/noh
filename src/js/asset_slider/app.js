/** GSAP */
import {
  gsap,
} from 'gsap';

gsap.defaults({ overwrite: true });

let ri = 0; // realindexを保持

const thumb_progress = function(i) {
  const this_slider_bar = $('.progress-bar').eq(i);
  // console.log(this_slider_bar);
  gsap.to(this_slider_bar, {
    duration: 11, //秒数
    width: "100%"
  });
}

const play_movie = function(m) {
  const this_movie = $('.content-media-video').eq(m);
  // console.log(this_movie[0]);
  this_movie[0].play();
}

const reset_movie = function() {
  var videos = document.getElementsByClassName('content-media-video');
  for (var i = 0; i < videos.length; i++) {
    var video = videos[i];
    video.currentTime = 0;
    video.pause();
  }
}


const thumbSwiper = new Swiper('.asset__thumb-slider', {
  slidesPerView: 'auto',
  watchSlidesVisibility: true,
  watchSlidesProgress: true,
  autoplay: {
    delay: 11000,
  }
});

$(document).on('click', '.asset__thumb-slider__slide', function(e) {
  if($(this).index() != ri) {
    gsap.set('.progress-bar', {width:0});
    reset_movie();
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
    delay: 11000,
    disableOnInteraction: false,
  },
  on : {
    init: function() {
      thumb_progress(0);
      play_movie(0);
    },
    beforeLoopFix: function(e) {
      gsap.set('.progress-bar', {width:0});
      // console.log("beforeLoopFix");
      // ri = e.realIndex;
      // reset_movie();
    },
    slideChangeTransitionEnd: function(e) {
      // console.log("slideChangeTransitionEnd");
      // ri = e.realIndex;
      // console.log(ri);
      thumb_progress(e.realIndex);
      // play_movie(ri);
    },
    transitionStart: function(){
      gsap.set('.progress-bar', {width:0});
      var videos = document.querySelectorAll('.content-media-video');
      Array.prototype.forEach.call(videos, function(video){
        // video.pause();
        video.currentTime = 0;
      });
    },
    transitionEnd: function(){
      var activeIndex = this.activeIndex;
      var activeSlide = document.getElementsByClassName('swiper-slide')[activeIndex];
      var activeSlideVideo = activeSlide.getElementsByTagName('video')[0];
      activeSlideVideo.play();
    },
  }
});

