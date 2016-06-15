<div class="btn-group">
  <a class="dropdown-toggle clear-shadow li-nav" data-toggle="dropdown" href="#">
    個人設定<span class="caret"></span>
  </a>

  <ul class="dropdown-menu">
    <li class="li-nav">
      <a tabindex="-1">Hello~{{Cookie::get('name')}}</a>
    </li>
    <li class="li-nav">
      {{Form::open(array('action'=>'UserController@logout'))}}
      <a tabindex="-1" onclick="$(this).parent('form').submit();">LogOut</a>
    </li>
  </ul>
</div>
