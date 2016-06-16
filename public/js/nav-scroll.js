$(document).ready(function() {
    $(window, document).scroll(function() {
        if ($(window).scrollTop() == 0) {
            $(".div-navBackground").css('opacity','0.2');
        }
        else if ($(window).scrollTop() != 0) {
          $(".div-navBackground").css('opacity','0.6');
          $(".div-navBackground").css('background-color','#abd2d5');
        }
    });
});
