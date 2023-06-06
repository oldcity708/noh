import {
  gsap,
} from 'gsap';

// ASSETのテキストスクロール
gsap.set(".scroll-wrap", {
  x: 100
});
gsap.to(".scroll-wrap", {
  x: -100,
  scrollTrigger: {
    trigger: '.asset__scroll-text',
    start: 'top bottom',
    end: 'bottom top',
    scrub: true,
    invalidateOnRefresh: true,
  },
});
