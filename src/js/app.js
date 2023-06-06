import { } from "./set_height";
import { } from "./scroll_trigger";

/** GSAP */
import {
  gsap,
} from 'gsap';
import { DrawSVGPlugin } from "gsap/DrawSVGPlugin";
import { ScrollTrigger } from "gsap/ScrollTrigger";

gsap.registerPlugin(DrawSVGPlugin);
gsap.registerPlugin(ScrollTrigger);

gsap.set("#path01,#path02,#path03", {
  drawSVG : '0%',
  visibility:"visible"
});

gsap.to("#path01,#path02,#path03", {
  drawSVG : '100%',
  duration: 1.4,
  ease:"power1.inOut"
});


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
    markers: true,
  }
});
