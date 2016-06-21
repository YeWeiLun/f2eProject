$(document).ready(function(){
  $('#toggle-nav')
      .on('click', function () {
        $('.nav-div').toggleClass('in');
        $('body').toggleClass('in');
        $("div.open").removeClass('open');
        $('#a-work').removeClass('slider-down');
      });
  $('.dropdown-toggle').on('click', function(){
    $('.dropdown-menu').toggleClass('in');
  })
  $('#article-dropdown-btn').on('click', function(){
    $('#a-work').toggleClass('slider-down');
  })
  $(window).resize(function() {
    $("div.open").removeClass('open');
    $('#a-work').removeClass('slider-down');
  });
});
