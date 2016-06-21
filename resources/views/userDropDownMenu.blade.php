<div class="btn-group">
  <a class="dropdown-toggle clear-shadow li-nav" id="user-dropdown-btn" data-toggle="dropdown" href="#">
    個人設定<span class="caret"></span>
  </a>

  <ul class="dropdown-menu">
    <li class="li-nav">
      <a class="a-sub-nav" tabindex="-1">你好,{{Session::get("user")[0]['name']}}!</a>
    </li>
    <li class="li-nav">
      {{Form::open(array('action'=>'UserController@logout'))}}
      <a class="a-sub-nav" tabindex="-1" onclick="$(this).parent('form').submit();">登出</a>
    </li>
    <div class="div-dropdown-background-1 navBackground"></div>
  </ul>
</div>
