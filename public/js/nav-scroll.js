$(document).ready(function() {
    $(window, document).scroll(function() {
        if ($(window).scrollTop() == 0) {
            $(".navBackground").css('opacity','0.2');
        }
        else if ($(window).scrollTop() != 0) {
          $(".navBackground").css('opacity','0.6');
          $(".navBackground").css('background-color','#abd2d5');
          $(".navBackground").css('-wekit-transition','opacity');
          $(".navBackground").css('transition','opacity');
          $(".navBackground").css('-wekit-transition-duration','1s');
          $(".navBackground").css('transition-duration','1s');
          $(".navBackground").css('-wekit-transition-timing-function','ease-in');
          $(".navBackground").css('transition-timing-function','ease-in');
        }
    });
});
