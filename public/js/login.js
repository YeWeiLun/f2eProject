$(document).ready(function(){
    $(".func-login").click(function(){
        $("#myModal").modal('show');
        $.ajax({
          url : $(this).data('url'),
          type : 'get',
          success:function(data)
          {
            $(".modal-content").html(data);
          }
        });
    });
    $(".modal-change-btn").click(function(){
      console.log(123);
        $.ajax({
          url: $(this).data('url'),
          type : 'get',
          succcess:function(data)
          {
            $(".modal.content").html(data);
          }
        })
    });
});
