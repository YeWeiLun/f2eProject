<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Bang Bang Bang</title>
    <meta name="viewport" content="width=device-width; initial-scale=1 user-scalable=0">
    <script rel="text/javascript" src="{{ URL::asset('js/jquery-1.12.3.min.js') }}" ></script>
    <script rel="text/javascript" src="{{ URL::asset('js/fb-jssdk.js') }}" ></script>
    <script rel="text/javascript" src="{{ URL::asset('js/notice.js') }}" ></script>
    <script rel="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}" ></script>
    <script rel="text/javascript" src="{{ URL::asset('js/login.js') }}" ></script>
    <script rel="text/javascript" src="{{ URL::asset('js/nav-slider.js') }}" ></script>
    <script rel="text/javascript" src="{{ URL::asset('js/moreBackgroundChanged.js') }}" ></script>
    <script rel="text/javascript" src="{{ URL::asset('js/nav-scroll.js') }}" ></script>
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/navbar.css') }}" />
    <link rel="shortcut icon" href="{{ URL::asset('img/favicon.ico') }}" />
</head>

<body>
  @if (Session::has("notice"))
  <div class="alert alert-success simplyNotice notice-up">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>{{Session::get("notice")}}!</strong>
  </div>
  @endif
    <!-- 主選單 -->
    @include("layouts.navbar")
    {{Form::open(array('action'=>'ArticleController@getArticleListByCatalogue','id'=>'switch-pager'))}}
    <div class="div-landingPage">
            <p class="p-slogan">大家都厭惡的垃圾，回收後竟然變成這樣，真是太神啦！</p>
            <br>
              <a href="#more">
                  <div class="div-moreBtn">了解更多</div>
                </a>
    </div>
    <div class='div-page-switch'>

    </div>
    <div id="more" class="div-more">
        <input type ='hidden' name = 'catalogue'>
        <div class="div-category" data-url="1">
          <img src="{{URL::asset('img/Plastic.png')}}" class="img-more" title="塑膠類" data="{{URL::asset('img/PlasticRecyle.jpg')}}"/></div></a>
        <div class="div-category-2" data-url="2">
        <img src="{{URL::asset('img/Metal.png')}}" class="img-more-2" title="金屬類"  data="{{URL::asset('img/MetalRecyle.jpg')}}"/></div>
        <div class="div-category-2" data-url="3">
          <img src="{{URL::asset('img/Paper.png')}}" class="img-more-3" title="紙類"  data="{{URL::asset('img/PaperRecyle.jpg')}}"/></div>
        <div class="div-category-2 div-category-3" data-url="4">
          <img src="{{URL::asset('img/Glass.png')}}" class="img-more-4" title="玻璃類"  data="{{URL::asset('img/GlassRecyle.jpg')}}"/></div>
        <div class="div-category-2 div-category-3" data-url="5">
          <img src="{{URL::asset('img/Cloth.png')}}" class="img-more-5" title="衣料類 "  data="{{URL::asset('img/ClothRecyle.jpg')}}"/></div>

    </div>
{{Form::close()}}
    <div class="clear"></div>
    @include("layouts.footer")
  <!-- 浮框 -->
  @include('modal')

</body>
</html>
