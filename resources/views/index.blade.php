<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Bang Bang Bang</title>
    <meta name="viewport" content="width=device-width; initial-scale=1 user-scalable=0">
    <script rel="text/javascript" src="{{ URL::asset('js/jquery-1.12.3.min.js') }}" ></script>
    <script rel="text/javascript" src="{{ URL::asset('js/fb-jssdk.js') }}" ></script>
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}" />
    <script rel="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}" ></script>
    <script rel="text/javascript" src="{{ URL::asset('js/login.js') }}" ></script>
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />
    <link rel="shortcut icon" href="{{ URL::asset('img/favicon.ico') }}" />
</head>

<body>
    <div id='fb-root'></div>
    <!-- 主選單 -->
    @include('navbar')
    <div class="div-landingPage">
        <div class="div-slogan">
            <p class="p-slogan">大家都厭惡的垃圾，回收後竟然變成這樣，真是太神啦！</p>
            <br>
            <a href="#more">
                <div class="div-moreBtn">了解更多</div>
            </a>
        </div>
    </div>
    <div id="more" class="div-more">
      <div class="div-category">
        <a href="#"><img src="{{URL::asset('img/Plastic.png')}}" class="img-more" title="塑膠類"/></a></div>
      <div class="div-category-2">
        <a href="#"><img src="{{URL::asset('img/Metal.png')}}" class="img-more" title="金屬類"/></a></div>
      <div class="div-category-2">
        <a href="#"><img src="{{URL::asset('img/Paper.png')}}" class="img-more" title="紙類"/></a></div>
      <div class="div-category-3">
        <a href="#"><a href="#"><img src="{{URL::asset('img/Glass.png')}}" class="img-more-2" title="玻璃類"/></a></div>
      <div class="div-category-3">
        <a href="#"><a href="#"><img src="{{URL::asset('img/Cloth.png')}}" class="img-more-3" title="衣料類"/></a></div>
    </div>
    <div class="clear"></div>
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
