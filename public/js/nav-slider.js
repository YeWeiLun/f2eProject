$(document).ready(function(){
  $('#toggle-nav')
      .on('click', function () {
        $('.nav-div').toggleClass('in');
        $('body').toggleClass('in');
      });
  $('.dropdown-toggle').on('click', function(){
    $('.dropdown-menu').toggleClass('in');
  })
  $('#article-dropdown-btn').on('click', function(){
    if($(window).width() <= 767) {
      $('#a-work').toggleClass('slider-down');
    }
  })
  $(document).ready(function(){
    $(window).resize(function() {
      $("div.open").removeClass('open');
      $('#a-work').removeClass('slider-down');
    });
});
});
