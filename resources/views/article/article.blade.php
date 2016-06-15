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
    <script rel="text/javascript" src="{{ URL::asset('js/moreBackgroundChanged.js') }}" ></script>
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/navbar.css') }}" />
    <link rel="shortcut icon" href="{{ URL::asset('img/favicon.ico') }}" />
</head>

<body>
    <!-- 主選單 -->
    @include("layouts.navbar")
    <footer>
        <div class="div-footerLink">
            <a href="#">
                <div class="div-footerLinkContent"><span class="span-footerLink">組員</span></div>
            </a>
            <a href="#">
                <div class="div-footerLinkContent"><span class="span-footerLink">相關連結</span></div>
            </a>
            <a href="#">
                <div class="div-footerLinkContent"><span class="span-footerLink">網站地圖</span></div>
            </a>
        </div>
        <div class="div-footer">&copy; 2016 Taipei Tech F2E. Fred / Jeff / Wei-Cheng / Wei-Lun
        </div>
    </footer>
  <!-- 浮框 -->
  @include('modal')
</body>
</html>