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
    $('#a-work').toggleClass('slider-down');
  })
});
