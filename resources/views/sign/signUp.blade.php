{{Form::open(array('action'=>'UserController@createUser'))}}
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h4 class="modal-title">註冊</h4>
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
  <p>
    {{Form::label('姓名')}}
    {{Form::text('name')}}
  </p>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-info modal-change-btn" onclick="changeModalView(this);" data-url='sign_in'>點我登入</button>
    <input type="submit" class="btn btn-primary" value ="確認送出"></input>
</div>
