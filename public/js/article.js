// external js: masonry.pkgd.js, imagesloaded.pkgd.js

// init Masonry

$(document).ready(function() {
  var $grid = $('.grid').masonry({
    itemSelector: '.grid-item',
    percentPosition: true
    // columnWidth: 200
  });
}(););
// layout Isotope after each image loads
// $grid.imagesLoaded().progress( function() {
//   $grid.masonry();
// });
