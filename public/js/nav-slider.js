$(document).ready(function(){
  $('#toggle-nav')
      .on('click', function () {
        $('.nav-div').toggleClass('in');
        $('#wrapper').toggleClass('in');
      });
});
