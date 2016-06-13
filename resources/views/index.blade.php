<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Bang Bang Bang</title>
    <meta name="viewport" content="width=device-width; initial-scale=1 user-scalable=0">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />
    <link rel="shortcut icon" href="{{ URL::asset('img/favicon.ico') }}" />
</head>

<body>
    <header>
        <a href="./"><img src="{{URL::asset('img/logo.png')}}" class="img-logo" /></a>
        <ul class="ul-nav">
            <a href="#" class="a-nav">
                <li class="li-nav">Home</li>
            </a>
            <a href="#" class="a-nav">
                <li class="li-nav">文章</li>
            </a>
            <a href="#" class="a-nav">
                <li class="li-nav">作品分享</li>
            </a>
            <a href="#" class="a-nav">
                <li class="li-nav">登入</li>
            </a>
        </ul>
    </header>
    <div class="div-navBackground"></div>
    <div class="clear"></div>
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

    </div>
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
</body>

</html>
