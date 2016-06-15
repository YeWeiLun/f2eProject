<nav id="navbar" role="navigation">
  <div class="container-fluid">
    <!-- 漢堡選單：按鈕 -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
        <div class="nav-btn">
      	  <div class="nav-btn-line"></div>
      	  <div class="nav-btn-line"></div>
      	  <div class="nav-btn-line"></div>
      	</div>
      </button>
    </div>
    <a href="./"><img src="{{URL::asset('img/logo.png')}}" class="img-logo" /></a>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
      <ul class="ul-nav nav navbar-nav">
          <a href="#" class="a-nav">
              <li class="li-nav">Home</li>
          </a>
          <a href="article" class="a-nav">
              <li class="li-nav">文章</li>
          </a>
          <a href="#" class="a-nav">
              <li class="li-nav">作品分享</li>
          </a>
          <a href="#" class="a-nav">
              @if(!empty($user))
                @include('userDropDownMenu')
              @else
                <li class="li-nav func-login" data-url="sign_in">登入</li>
              @endif
          </a>
      </ul>
    </div>
  </div>
</nav>
<div class="div-navBackground"></div>
<div class="clear"></div>
