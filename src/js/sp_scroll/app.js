$(function(){
  $(window).on('load resize', function(){
    if($(window).width() <= 768){
      
      var fashionWrapWidth = $('.fashion__list-wrap').outerWidth();
      var fashionListWidth = $('.fashion__list').outerWidth();
      var fashionDiff = fashionListWidth - fashionWrapWidth;
      var fashionScrollWidth = fashionDiff / 2;
      console.log(fashionScrollWidth);
      $('.fashion__list-wrap').scrollLeft(fashionScrollWidth);

      var effectWrapWidth = $('.effect__list-wrap').outerWidth();
      var effectListWidth = $('.effect__list').outerWidth();
      var effectDiff = effectListWidth - effectWrapWidth;
      var effectScrollWidth = effectDiff / 2;
      console.log(effectScrollWidth);
      $('.effect__list-wrap').scrollLeft(effectScrollWidth);

    }
  });
});