import { } from "./set_height";
import { } from "./scroll_trigger";

/** GSAP */
import {
  gsap,
} from 'gsap';
import { DrawSVGPlugin } from "gsap/DrawSVGPlugin";

gsap.registerPlugin(DrawSVGPlugin);

gsap.set("#path01,#path02,#path03", {
  drawSVG : '0%',
  visibility:"visible"
});

gsap.to("#path01,#path02,#path03", {
  drawSVG : '100%',
  duration: 1.4,
  ease:"power1.inOut"
});