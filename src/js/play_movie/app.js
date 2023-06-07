/** GSAP */
import {
  gsap,
} from 'gsap';

import { ScrollTrigger } from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger);



var videos = document.querySelectorAll('.video');
videos.forEach(function(video) {
  gsap.to(video, {
    scrollTrigger: {
      trigger: video,
      start: 'top bottom',
      onEnter: function() {
        video.play();
      }
    }
  });
});