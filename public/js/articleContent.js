$(document).ready(function() {
  var container = $('.article-content');
  var content = $(container).text();
  console.log(content);
  content = content.replace(/\r\n|\n|\r/g, '<br />');
  $(container).html(content);
});
