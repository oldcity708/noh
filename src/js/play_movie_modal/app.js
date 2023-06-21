$('.movie__movie').on('click',function(){
  $('.movie__modal').addClass('active');
  $('body').addClass('fixed');
});


$('.close').on('click',function(){
  $('.movie__modal').removeClass('active');
  $('body').removeClass('fixed');
});
