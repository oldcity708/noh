// import {
//   gsap,
// } from 'gsap';

// import { ScrollTrigger } from "gsap/ScrollTrigger";

// gsap.registerPlugin(ScrollTrigger);


// // ランダムテキスト生成
// function TextShuffle(_txt) {
//   var _this = this;
//   _this._index = 0;

//   var _finalString, _finalLength, _currentString = "";
//   var _randChars = ["A", "B", "C", "D", "E", "F", "G", "H", "J", "K", "L", "M", "N", "O", "P", "R", "S"];
//   var _chars = _randChars.length;
  
//   _this.to = function (_newStr, _time) {
//     _finalString = _newStr;
//     _finalLength = _finalString.length, _this._index = 0;
//     gsap.killTweensOf(_this);
//     // gsap.to(_this, { duration: _time || 2, _index: _finalLength * 2, ease: "power2.out", onUpdate: shuffle });
//     gsap.to(_this, { duration: _time || 2, _index: _finalLength * 3, ease: "power2.out", onUpdate: shuffle });
//   };

//   function shuffle() {
//     if (_this._index > _finalLength) _currentString = _finalString.slice(0, _this._index - _finalLength) + randomString().slice(0, _finalLength - _this._index);
//     else _currentString = randomString();

//     _txt.innerHTML = _currentString;
//   }

//   function randomString() {
//     var _char = "", _str = "";
//     for (var i = 0; i < _this._index * 0.5; ++i) {
//       _char = _randChars[Math.floor(Math.random() * _chars)];
//       _str += _char;
//     }
//     return _str;
//   }
// }



// // ランダムテキストごとに配列を作る
// const arrays = [];
// $('.c-text-shuffle').each(function(index){
//   const array = [];
//   $(this).find('.c-text-shuffle--element').each(function() {
//     array.push($(this).text());
//   });
//   arrays[index] = array;
// });


// // ランダムテキストごとにスクロールしたらランダムテキスト関数を発火
// gsap.utils.toArray(".c-text-shuffle").forEach(function(target, index) {
//   gsap.from(target, {
//     scrollTrigger: {
//       trigger: target,
//       // markers: true,
//       onEnter: function() {
//         const shuffle_targets = target.querySelectorAll('.c-text-shuffle--element');
//         const this_array = arrays[index];
//         const this_array_length = this_array.length;
//         for (let i = 0; i < this_array_length; i++) {
//           let element = shuffle_targets[i];
//           let element_text = shuffle_targets[i].innerText;
//           var _shuffle = new TextShuffle(element);
//           _shuffle.to(element_text, 1.2);
//         }
//       }
//     },
//   });
// });
