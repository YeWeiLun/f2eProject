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
    <link rel="stylesheet" href="{{ URL::asset('css/link.css') }}" />
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
    <div class="div-linkZone">
      <a href="http://ecofans.pixnet.net/blog" target="_blank" title="http://ecofans.pixnet.net/blog">
        <span class="span-linkTitle">► 綠粉絲</span>
      </a><br><br>

      <a href="https://www.facebook.com/hsinyespring/?fref=ts" target="_blank" title="https://www.facebook.com/hsinyespring/?fref=ts">
          <span class="span-linkTitle">► 心怡舊衣回收</span>
      </a><br><br>

      <a href="http://www.rouding.com/life-diy/feiwuliyong/" target="_blank" title="http://www.rouding.com/life-diy/feiwuliyong/">
          <span class="span-linkTitle">► 肉丁生活創意-廢物利用</span>
      </a><br><br>

      <a href="http://www.epa.gov.tw/np.asp?ctNode=31296&mp=epa" target="_blank" title="http://www.epa.gov.tw/np.asp?ctNode=31296&mp=epa">
          <span class="span-linkTitle">► 行政院環境保護署-資源循環</span>
      </a><br><br>

      <a href="http://www.weimeixi.com/diy/jiuwugaizao/" target="_blank" title="http://www.weimeixi.com/diy/jiuwugaizao/">
          <span class="span-linkTitle">► 唯美系-舊物改造</span>
      </a><br><br>
      <a href="http://www.miuon.com/news/?list_1.html" target="_blank">
          <span class="span-linkTitle">► 妙生活-舊物改造</span>
      </a><br>
      </div>
  </div>
  @include("layouts.footer")
  <!-- 浮框 -->
  @include('modal')
</body>
</html>
