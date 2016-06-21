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
        '_token':$("input[name='_token']").val()
      },
      success:function(resp){
        $('body').html(resp);
        document.URL += 'article';
      }

    })
  });
});
