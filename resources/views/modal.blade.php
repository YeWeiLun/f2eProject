<div id="myModal" class="modal fade">
    <div class="modal-dialog">
      {{Form::open(array('action'=>'UserController@loginUser'))}}
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Confirmation</h4>
            </div>
            <div class="modal-body">

                {{Form::text('test','example')}}
            </div>
            <div class="modal-footer">
                <div class="fb-login-button" data-max-rows="1" data-size="medium" data-show-faces="false" data-auto-logout-link="false"></div>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-primary" value ="Login"></input>
            </div>
        </div>
    </div>
</div>
