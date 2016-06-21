$(document).ready(function() {
    $(".navBackground").css('opacity','0.6');
    $(window, document).scroll(function() {
        if ($(window).scrollTop() == 0) {
            $(".navBackground").css('opacity','0.6');
            $(".li-nav").css('color','white');
            $(".a-sub-nav").css('color', 'white');
        }
        else if ($(window).scrollTop() != 0) {
          $(".navBackground").css('opacity','0.8');
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
