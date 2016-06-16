$(document).ready(function(){
  setTimeout("noticeFadeOut();",600);
});
function noticeFadeOut()
{
  $(".simplyNotice").each(function(){
    $(this).fadeOut(2000);
  });
}
