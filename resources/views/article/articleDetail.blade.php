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
    <script rel="text/javascript" src="{{ URL::asset('js/imagesloaded.pkgd.min.js') }}" ></script>
    <script rel="text/javascript" src="{{ URL::asset('js/article.js') }}" ></script>
    <script rel="text/javascript" src="{{ URL::asset('js/articleContent.js') }}" ></script>
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/article.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/navbar.css') }}" />
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

  <section>
      <h1>{{$article->title}}</h1>
      <!-- <div class="fb-share-button" data-href="" data-layout="button_count" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">分享</a></div> -->
      <div class="fb-like" data-href="{{$article->tid}}" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
      <div class='article-content'>
        <?php echo $article->content ?>
      </div>

  </section>
  @include("layouts.footer")
</body>
</html>
