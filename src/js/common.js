// ES6
'use strict';

const { TimelineLite } = require("gsap/gsap-core");

const MESSAGE = "initialized!";

let greet = () => {
  console.log(MESSAGE);
};

greet();

$(function () {



  var arr = []
  //初期値の設定
  function TypingInit() {
    $('.c-text-shuffle--element').each(function (i) { //js_typingクラスを全て処理をおこなう
      arr[i] = new ShuffleText(this);//動作させるテキストを配列に格納
    });
  }
  //スクロールした際のアニメーションの設定
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




});