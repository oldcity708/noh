$(function(){
  $(".fashion__list li").on("mouseenter", function() {
    var videoElement = $(this).find("video")[0];
    if (videoElement) {
      videoElement.play();
    }
    $(this).find("video").addClass("active zoom");
    $(this).find(".thumb").addClass("zoom");
  }).on("mouseleave", function() {
    var videoElement = $(this).find("video")[0];
    if (videoElement) {
      videoElement.pause();
    }
    $(this).find("video").removeClass("zoom");
    $(this).find(".thumb").removeClass("zoom");
  });
});