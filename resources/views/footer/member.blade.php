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
    <div>
      <div class="div-oneMember">
          <img src="{{URL::asset('img/fred.jpg')}}" class="img-memberPic" title="陳品政"/>
          <div class="div-infoDetail">
            <p class="p-memberTitle">陳品政 Fred</p>
            <div class="clear"></div>
            <span class="span-memberContent">生日：8/21</span><br>
            <span class="span-memberContent">興趣：打球、聽音樂</span><br>
            <span class="span-memberContent">擅長：Java、Html、CSS</span><br>
            <span class="span-memberContent">夢想：無憂無慮過生活</span><br>
            <a href="https://www.facebook.com/Chen.PinCheng" target="_blank"><img src="{{URL::asset('img/fb.png')}}" title="看我FB!" class="img-fb" /></a>
          </div>
        </div>
        <div class="div-oneMember">
          <img src="{{URL::asset('img/jeff.jpg')}}" class="img-memberPic" title="陳政皓"/>
          <div class="div-infoDetail">
              <p class="p-memberTitle">陳政皓 Jeff</p>
              <span class="span-memberContent">生日：9/7</span><br>
              <span class="span-memberContent">興趣：開實況、聽音樂</span><br>
              <span class="span-memberContent">擅長：C#</span><br>
              <span class="span-memberContent">夢想：獨立開發遊戲</span><br>
              <a href="https://www.facebook.com/r124402246" target="_blank"><img src="{{URL::asset('img/fb.png')}}" title="看我FB!" class="img-fb" /></a>
          </div>
        </div>
        <div class="div-oneMember">
          <img src="{{URL::asset('img/weicheng.jpg')}}" class="img-memberPic" title="周韋丞"/>
          <div class="div-infoDetail">
            <p class="p-memberTitle">周韋丞 Wei-Cheng</p>
            <span class="span-memberContent">生日：2/3</span><br>
            <span class="span-memberContent">興趣：吃吃吃</span><br>
            <span class="span-memberContent">擅長：???</span><br>
            <span class="span-memberContent">夢想：遺失在回家的路上</span><br>
            <a href="https://www.facebook.com/profile.php?id=100000441126685" target="_blank"><img src="{{URL::asset('img/fb.png')}}" title="看我FB!" class="img-fb" /></a>
          </div>
        </div>
        <div class="div-oneMember">
          <img src="{{URL::asset('img/weilun.jpg')}}" class="img-memberPic" title="葉偉倫"/>
          <div class="div-infoDetail">
            <p class="p-memberTitle">葉偉倫 Wei-Lun</p>
            <span class="span-memberContent">生日：5/23</span><br>
            <span class="span-memberContent">興趣：解謎</span><br>
            <span class="span-memberContent">擅長：C#</span><br>
            <span class="span-memberContent">夢想：???</span><br>
            <a href="https://www.facebook.com/profile.php?id=100001960325240" target="_blank"><img src="{{URL::asset('img/fb.png')}}" title="看我FB!" class="img-fb" /></a>
          </div>
        </div>
      </div>
      <div class="clear"></div>
    </div>
  @include("layouts.footer")
  <!-- 浮框 -->
  @include('modal')
</body>
</html>
