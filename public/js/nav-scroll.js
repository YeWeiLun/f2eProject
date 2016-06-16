$(document).ready(function() {
    $(window, document).scroll(function() {
        if ($(window).scrollTop() == 0) {
            $(".div-navBackground").css('opacity','0.2');
        }
        else if ($(window).scrollTop() != 0) {
          $(".div-navBackground").css('opacity','0.6');
          $(".div-navBackground").css('background-color','#abd2d5');
          $(".div-navBackground").css('-wekit-transition','opacity');
          $(".div-navBackground").css('transition','opacity');
          $(".div-navBackground").css('-wekit-transition-duration','1s');
          $(".div-navBackground").css('transition-duration','1s');
          $(".div-navBackground").css('-wekit-transition-timing-function','ease-in');
          $(".div-navBackground").css('transition-timing-function','ease-in');
        }
    });
});
