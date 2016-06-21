$(document).ready(function(){

  $('.img-more,.img-more-2,.img-more-3,.img-more-4,.img-more-5').on('mouseover', function(){
    $('.div-more').css('background-image',"url("+$(this).attr('data')+")");
  });
  $(".div-category,.div-category-2,.div-category-3").click(function(){
    $.ajax({
      url: 'article',
      type:'post',
      data:
      {
        'catalogue':$(this).data('url'),
        '_token':'c7ykXzsT4ZrTdB4QlncclpXmZ0LWdGFNuWVp3Rwe'
      },
      success:function(resp){
        $('body').html(resp);
      }

    })
  });
  $("#catalogue").bind("change",function(){console.log(123);this.form.submit();})
});
