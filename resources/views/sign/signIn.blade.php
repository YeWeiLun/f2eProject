{{Form::open(array('action'=>'UserController@loginUser'))}}
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h4 class="modal-title">登入</h4>
</div>
<div class="modal-body">
  <p>
    {{Form::label('帳號')}}
    {{Form::text('acc')}}
  </p>
  <p>
    {{Form::label('密碼')}}
    {{Form::password('pwd')}}
  </p>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-primary modal-change-btn" onclick="changeModalView(this);" data-url="sign_up">點我註冊</button>
    <input type="submit" class="btn btn-primary" value ="確認送出"></input>
</div>
