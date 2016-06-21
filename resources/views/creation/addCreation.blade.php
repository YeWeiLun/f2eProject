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
    <link rel="stylesheet" href="{{ URL::asset('css/createViewStyle.css') }}" />
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
{{Form::open(array('action'=>'SharedCreationController@newCreation'))}}
    <div class="div-textArea input-group">
      {{Form::label('標　　題','標　　題',array('class'=>'input-group-addon'))}}
      {{Form::text('title','',array('class'=>'form-control'))}}
    </div>
    <div class="div-textArea input-group">
      {{Form::label('封面圖片','封面圖片',array('class'=>'input-group-addon'))}}
      {{Form::text('scPic','',array('class'=>'form-control'))}}
    </div>
    <div class="div-textArea input-group">
      {{Form::label('分　　類','分　　類',array('class'=>'input-group-addon'))}}
      <div class = "form-control">
        <div class="div-left">
          @include("creation.creationCatalogue")
        </div>
      </div>
    </div>
    <div class="div-textArea input-group">
      {{Form::label('Youtube影片','Youtube影片',array('class'=>'input-group-addon'))}}
      {{Form::text('youtubeUrl','',array('class'=>'form-control'))}}
    </div>
    <div class="div-textArea input-group">
      {{Form::label('內　　文','內　　文',array('class'=>'input-group-addon'))}}
      {{Form::textarea('content','',array('class'=>'form-control'))}}
    </div>
    <div class="div-textArea input-group">
      <input type='submit' class='input-group-addon form-control'>
    </div>
  {{Form::close()}}
  </div>
  @include("layouts.footer")
</body>
</html>
