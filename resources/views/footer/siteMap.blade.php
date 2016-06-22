<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Bang Bang Bang</title>
    <meta name="viewport" content="width=device-width; initial-scale=1 user-scalable=0">
    <script rel="text/javascript" src="{{ URL::asset('js/jquery-1.12.3.min.js') }}" ></script>
    <script rel="text/javascript" src="{{ URL::asset('js/fb-jssdk.js') }}" ></script>
    <script rel="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}" ></script>
    <script rel="text/javascript" src="{{ URL::asset('js/login.js') }}" ></script>
    <script rel="text/javascript" src="{{ URL::asset('js/nav-slider.js') }}" ></script>
    <script rel="text/javascript" src="{{ URL::asset('js/nav-scroll-other.js') }}" ></script>
    <script rel="text/javascript" src="{{ URL::asset('js/masonry.pkgd.min.js') }}" ></script>
    <script rel="text/javascript" src="{{ URL::asset('js/siteMap.js') }}" ></script>
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/navbar.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/siteMap.css') }}" />
    <link rel="shortcut icon" href="{{ URL::asset('img/favicon.ico') }}" />
</head>

<body>
  @if (Session::has("notice"))
    {{Session::get("notice")}}
  @endif
  <!-- 主選單 -->
  @include("layouts.navbar")
  <!-- Content -->
  <div class="div-navWhiteBackGround"></div>
  <div class="div-content">
    <div class="div-mapZone">
      <a href="article"><span class="span-mapTitle">文章〉</span></a>
      <hr>
        {{Form::open(array('action'=>'ArticleController@getArticleListByCatalogue','id'=>'switch-pager'))}}
        <input type ='hidden' name = 'catalogue'>
      <a href="#" data-url="1" class="a-articleTurn"><span class="span-mapContent" >塑膠類</span></a>
      <br>
      <a href="#" data-url="2" class="a-articleTurn"><span class="span-mapContent">金屬類</span></a>
      <br>
      <a href="#" data-url="3" class="a-articleTurn"><span class="span-mapContent">紙類</span></a>
      <br>
      <a href="#" data-url="4" class="a-articleTurn"><span class="span-mapContent">玻璃類</span></a>
      <br>
      <a href="#" data-url="5" class="a-articleTurn"><span class="span-mapContent">衣料類</span></a>
      <br>
      {{Form::close()}}
    </div>
    <div class="div-mapZone">
      <a href="creation"><span class="span-mapTitle">作品分享〉</span></a>
      <hr>
      @if(Session::has('user'))
      <a href="{{ url('/creation') }}"><span class="span-mapContent">+新增貼文</span></a>
      <br>
      @endif
      {{Form::open(array('action'=>'SharedCreationController@getByCatalogue','id'=>'switch-pager2'))}}
      <input type ='hidden' name = 'catalogue'>
      <a href="#" data-url="1" class="a-creationTurn"><span class="span-mapContent">塑膠類</span></a>
      <br>
      <a href="#" data-url="2" class="a-creationTurn"><span class="span-mapContent">金屬類</span></a>
      <br>
      <a href="#" data-url="3" class="a-creationTurn"><span class="span-mapContent">紙類</span></a>
      <br>
      <a href="#" data-url="4" class="a-creationTurn"><span class="span-mapContent">玻璃類</span></a>
      <br>
      <a href="#" data-url="5" class="a-creationTurn"><span class="span-mapContent">衣料類</span></a>
      <br>
      {{Form::close()}}
    </div>
    <div class="div-mapZone">
      <span class="span-mapTitleNoLink">個人設定</span>
      <hr>
      @if(Session::has('user'))
      {{Form::open(array('action'=>'UserController@logout'))}}
      <a href="#" class="a-sub-nav" tabindex="-1" onclick="$(this).parent('form').submit();"><span class="span-mapContent" >登出</span></a>
      {{Form::close()}}
      @else
      <a href="#"><span class="span-mapContent func-login" data-url="sign_in">登入</span></a>
      @endif
      <br>
    </div>
    <div class="div-mapZone">
      <span class="span-mapTitleNoLink">站務</span>
      <hr>
      <a href="member"><span class="span-mapContent">關於我們</span></a>
      <br>
      <a href="link"><span class="span-mapContent">相關連結</span></a>
      <br>
      <a href="siteMap"><span class="span-mapContent">網站地圖</span></a>
      <br>
    </div>
  </div>
  @include("layouts.footer")
  <!-- 浮框 -->
  @include('modal')
</body>
</html>
