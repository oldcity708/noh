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


// NOHロゴのSVGアニメーション
gsap.set("#path01,#path02,#path03", {
  drawSVG : '0%',
  visibility:"visible"
});
gsap.to("#path01,#path02,#path03", {
  scrollTrigger: {
    trigger: '.draw-svgs',
    start: 'top bottom',
    // end: 'bottom top',
    end: 'top bottom',
    // scrub: true,
    markers: true,
  },
  drawSVG : '100%',
  duration: 1.4,
  ease:"power1.inOut"
});


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
    markers: true,
  },
});


// ランダムテキストアニメーション
var arr = []
function TypingInit() {
  $('.c-text-shuffle--element').each(function (i) { //js_typingクラスを全て処理をおこなう
    arr[i] = new ShuffleText(this);//動作させるテキストを配列に格納
  });
}
function TypingAnime() {
  $(".c-text-shuffle--element").each(function (i) {
    var elemPos = $(this).offset().top - 50;//要素より、50px上の
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();
    if (scroll >= elemPos - windowHeight) {
      if(!$(this).hasClass("endAnime")){//endAnimeのクラスがあるかチェック
        arr[i].start();//配列で登録テキストのアニメーションをおこなう
        arr[i].duration = 800;//テキストが最終変化するまでの時間※規定値600
        $(this).addClass("endAnime");//１度アニメーションした場合はendAnimeクラスを追加
      }
    }else{
      $(this).removeClass("endAnime"); //範囲外にスクロールした場合はendAnimeのクラスを削除
    }
  });
}
TypingInit(); //初期設定
TypingAnime();

gsap.to("#shuffle01", {
  scrollTrigger: {
    trigger: '#shuffle01',
    start: 'top bottom',
    // end: 'bottom top',
    invalidateOnRefresh: true,
    markers: true,
    onEnter: TypingAnime
  },
});
gsap.to("#shuffle02", {
  scrollTrigger: {
    trigger: '#shuffle02',
    start: 'top bottom',
    // end: 'bottom top',
    invalidateOnRefresh: true,
    markers: true,
    onEnter: TypingAnime
  },
});
gsap.to("#shuffle03", {
  scrollTrigger: {
    trigger: '#shuffle03',
    start: 'top bottom',
    // end: 'bottom top',
    invalidateOnRefresh: true,
    markers: true,
    onEnter: TypingAnime
  },
});
gsap.to("#shuffle04", {
  scrollTrigger: {
    trigger: '#shuffle04',
    start: 'top bottom',
    // end: 'bottom top',
    invalidateOnRefresh: true,
    markers: true,
    onEnter: TypingAnime
  },
});

