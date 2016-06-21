$(document).ready(function(){
  $('#toggle-nav')
      .on('click', function () {
        $('.nav-div').toggleClass('in');
        $('body').toggleClass('in');
        $("div.open").removeClass('open');
        $('#creation-dropdown-btn').removeClass('slider-down');
        $('#user-dropdown-btn').removeClass('slider-down');
      });
  $('.dropdown-toggle').on('click', function(){
    $('.dropdown-menu').toggleClass('in');
  })
  $('#user-dropdown-btn').on('click', function(){
    $('#creation-dropdown-btn').removeClass('slider-down');
    $('#user-dropdown-btn').removeClass('slider-down');
  })
  $('#article-dropdown-btn').on('click', function(){
    $('#creation-dropdown-btn').toggleClass('slider-down');
    $('#user-dropdown-btn').removeClass('slider-down');
  })
  $('#creation-dropdown-btn').on('click', function(){
    $('#user-dropdown-btn').toggleClass('slider-down');
    $('#creation-dropdown-btn').removeClass('slider-down');
  })
  $(window).resize(function() {
    $("div.open").removeClass('open');
    $('#creation-dropdown-btn').removeClass('slider-down');
    $('#user-dropdown-btn').removeClass('slider-down');
  });
});
