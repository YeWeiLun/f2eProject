<nav>
    <!-- 漢堡選單：按鈕 -->
    <div>
      <button type="button" id="toggle-nav" class="navbar-toggle">
        <div class="nav-btn">
      	  <div class="nav-btn-line"></div>
      	  <div class="nav-btn-line"></div>
      	  <div class="nav-btn-line"></div>
      	</div>
      </button>
    </div>
    <a href="{{ url('/') }}"><img src="{{URL::asset('img/logo.png')}}" class="img-logo" /></a>

    <div class="nav-div">
      <ul class="ul-nav">
          <a href="{{ url('/') }}" class="a-nav">
              <li class="li-nav">Home</li>
          </a>
          <a href="{{ url('/article') }}" class="a-nav">
              @if(Session::has('user'))
                @include('articleDropDownMenu')
              @else
                <li class="li-nav">相關文章</li>
              @endif
          </a>
          <a href="#" class="a-nav">
              <li id="a-work" class="li-nav">作品分享</li>
          </a>
          <a href="#" class="a-nav">
              @if(Session::has('user'))
                @include('userDropDownMenu')
              @else
                <li class="li-nav func-login" data-url="{{ url('/').'sign_in' }}">登入</li>
              @endif
          </a>
      </ul>
    </div>
</nav>
<div class="div-navBackground navBackground"></div>
<div class="clear"></div>
