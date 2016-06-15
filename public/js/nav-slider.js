$(document).ready(function(){
  $('#bs-example-navbar-collapse-2')
      .on('show.bs.collapse', function (e) {
          $('body').addClass('menu-slider');
      })
      .on('shown.bs.collapse', function (e) {
          $('body').addClass('in');
      })
      .on('hide.bs.collapse', function (e) {
          $('body').removeClass('menu-slider');
      })
      .on('hidden.bs.collapse', function (e) {
          $('body').removeClass('in');
      });
});
