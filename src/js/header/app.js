$(function(){
  $(window).on("scroll", function () {
		var scrollTop = $(window).scrollTop();
		// var windowHeight = $(window).height();
    var movie = $(".movie").offset().top; 

    if (scrollTop > movie) {
      $('.header').addClass('active');
		} else {
      $('.header').removeClass('active');
		} 

	});
});