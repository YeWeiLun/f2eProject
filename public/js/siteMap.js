$(document).ready(function(){
  $(".a-articleTurn").click(function(){
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
  $(".a-creationTurn").click(function(){
    $.ajax({
      url: 'creation',
      type:'post',
      data:
      {
        'catalogue':$(this).data('url'),
        '_token':$("input[name='_token']").val()
      },
      success:function(resp){
        $('body').html(resp);
        document.URL += 'creation';
      }
    })
  });
});
