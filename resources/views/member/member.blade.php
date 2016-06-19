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
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/navbar.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/member.css') }}" />
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
    <div class="div-oneMember">
      <div class="div-memberPic">
        <img src="{{URL::asset('img/fred.jpg')}}" class="img-memberPic" title="陳品政"/>
        <img src="{{URL::asset('img/jeff.jpg')}}" class="img-memberPic" title="陳政皓"/>
        <img src="{{URL::asset('img/weicheng.jpg')}}" class="img-memberPic" title="周韋丞"/>
        <img src="{{URL::asset('img/weilun.jpg')}}" class="img-memberPic" title="葉偉倫"/>
      </div>
      <div class="div-memberInfo">
        <div class="div-infoDetail">

        </div>
        <div class="div-infoDetail">

        </div>
        <div class="div-infoDetail">

        </div>
        <div class="div-infoDetail">

        </div>
      </div>
    </div>
    <div class="clear"></div>
  @include("layouts.footer")
  <!-- 浮框 -->
  @include('modal')
</body>
</html>
