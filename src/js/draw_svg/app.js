/** GSAP */
import {
  gsap,
} from 'gsap';

import { DrawSVGPlugin } from "gsap/DrawSVGPlugin";
import { ScrollTrigger } from "gsap/ScrollTrigger";

gsap.registerPlugin(DrawSVGPlugin);
gsap.registerPlugin(ScrollTrigger);


// NOHロゴのSVGアニメーション
gsap.set("#path01,#path02,#path03", {
  drawSVG : '0%',
  visibility:"visible"
});
gsap.to("#path01,#path02,#path03", {
  scrollTrigger: {
    trigger: '.draw-svgs',
    start: 'top bottom',
    end: 'top bottom',
  },
  drawSVG : '100%',
  duration: 1.4,
  ease:"power1.inOut"
});
