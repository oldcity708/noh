import {
  gsap,
} from 'gsap';

import { ScrollTrigger } from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger);

function TextShuffle(_txt) {
  var _this = this;
  _this._index = 0;

  var _finalString, _finalLength, _currentString = "";
  var _randChars = ["A", "B", "C", "D", "E", "F", "G", "H", "J", "K", "L", "M", "N", "O", "P", "R", "S"];
  var _chars = _randChars.length;
  
  _this.to = function (_newStr, _time) {
    _finalString = _newStr;
    _finalLength = _finalString.length, _this._index = 0;
    gsap.killTweensOf(_this);
    gsap.to(_this, { duration: _time || 2, _index: _finalLength * 2, ease: "power2.out", onUpdate: shuffle });
  };

  function shuffle() {
    if (_this._index > _finalLength) _currentString = _finalString.slice(0, _this._index - _finalLength) + randomString().slice(0, _finalLength - _this._index);
    else _currentString = randomString();

    _txt.innerHTML = _currentString;
  }

  function randomString() {
    var _char = "", _str = "";
    for (var i = 0; i < _this._index * 0.5; ++i) {
      _char = _randChars[Math.floor(Math.random() * _chars)];
      _str += _char;
    }
    return _str;
  }
}

var texts = [],
    shuffle01_flag = false,
    shuffle02_flag = false,
    shuffle03_flag = false,
    shuffle04_flag = false;

$('.c-text-shuffle--element').each(function(e) {
  texts.push($(this).text());
});

gsap.to("#shuffle01", {
  scrollTrigger: {
    trigger: '#shuffle01',
    start: 'top bottom',
    invalidateOnRefresh: true,
    onEnter: function() {
      if(!shuffle01_flag) {
        shuffle01_flag = true;
        const shuffle_targets = $('#shuffle01').find('.c-text-shuffle--element');
        let i=0;
        for (let index = 0; index < 3; index++) {
          const element = shuffle_targets[i];
          var _shuffle = new TextShuffle(element);
          _shuffle.to(texts[index], 1.2);
          i++;
        }
      }
    }
  },
});


gsap.to("#shuffle02", {
  scrollTrigger: {
    trigger: '#shuffle02',
    start: 'top bottom',
    invalidateOnRefresh: true,
    onEnter: function() {
      if(!shuffle02_flag) {
        shuffle02_flag = true;
        const shuffle_targets = $('#shuffle02').find('.c-text-shuffle--element');
        let i=0;
        for (let index = 3; index < 6; index++) {
          const element = shuffle_targets[i];
          var _shuffle = new TextShuffle(element);
          _shuffle.to(texts[index], 1.2);
          i++;
        }
      }
    }
  },
});

gsap.to("#shuffle03", {
  scrollTrigger: {
    trigger: '#shuffle03',
    start: 'top bottom',
    invalidateOnRefresh: true,
    onEnter: function() {
      if(!shuffle03_flag) {
        shuffle03_flag = true;
        const shuffle_targets = $('#shuffle03').find('.c-text-shuffle--element');
        let i=0;
        for (let index = 6; index < 9; index++) {
          const element = shuffle_targets[i];
          var _shuffle = new TextShuffle(element);
          _shuffle.to(texts[index], 1.2);
          i++;
        }
      }
    }
  },
});

gsap.to("#shuffle04", {
  scrollTrigger: {
    trigger: '#shuffle04',
    start: 'top bottom',
    invalidateOnRefresh: true,
    onEnter: function() {
      if(!shuffle04_flag) {
        shuffle04_flag = true;
        const shuffle_targets = $('#shuffle04').find('.c-text-shuffle--element');
        let i=0;
        for (let index = 9; index < 12; index++) {
          const element = shuffle_targets[i];
          var _shuffle = new TextShuffle(element);
          _shuffle.to(texts[index], 1.2);
          i++;
        }
      }
    }
  },
});



gsap.utils.toArray(".c-text-shuffle").forEach(function(target) {
  gsap.from(target, {
    scrollTrigger: {
      trigger: target,
      // markers: true,
      onEnter: function() {
        let shuffle_targets = $(this).find('.c-text-shuffle--element');
        console.log(shuffle_targets);
        // let i=0;
        // for (let index = 0; index < 3; index++) {
        //   const element = shuffle_targets[i];
        //   var _shuffle = new TextShuffle(element);
        //   _shuffle.to(texts[index], 1.2);
        //   i++;
        // }
      }
    },
  });
});