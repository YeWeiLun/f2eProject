<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h4 class="modal-title">SignIn</h4>
</div>
<div class="modal-body">
  <p>
    {{Form::label('Account')}}
    {{Form::text('acc')}}
  </p>
  <p>
    {{Form::label('Password')}}
    {{Form::password('pwd')}}
  </p>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-primary modal-change-btn" data-url='sign_up'>Sign Up</button>
    <input type="submit" class="btn btn-primary" value ="Sign In"></input>
</div>
