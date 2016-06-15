<div class="btn-group">
  <a class="li-nav dropdown-toggle clear-shadow" data-toggle="dropdown" href="#">
    個人設定<span class="caret"></span>
  </a>

  <ul class="dropdown-menu">
    <li class="li-nav">
      <a tabindex="-1">Hello~{{{$user->name}}}</a>
    </li>
    <li class="divider"></li>
    <li class="li-nav">
      {{Form::open(array('action'=>'UserController@logout'))}}
      <input type="submit" value ="Logout"></input>
    </li>
  </ul>
</div>
