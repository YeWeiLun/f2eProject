$(document).ready(function(){
    $(".func-login").click(function(){
        $("#myModal").modal('show');
        $.ajax({
          url : $(this).data('url'),
          type : 'get',
          success:function(data)
          {
            $(".modal-content").html(data);
            $(".modal-change-btn").click(function(){
              $("#myModal").modal('show');
            });
          }
        });
    });
});

function changeModalView(element)
{
  $.ajax({
    url : $(element).data('url'),
    type : 'get',
    success:
      function(data)
      {
        $(".modal-content").html(data);
      }
  });
}
