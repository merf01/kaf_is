<!DOCTYPE html>
<!-- include 'lang.php'; -->
<!-- <html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> -->
<html>
<head>
<meta content='text/html; charset=UTF-8' http-equiv='Content-Type'>
<title>{{$title}}</title>
<link href='{{URL::asset(&#39;css/bootstrap.min.css&#39;) }}' rel='stylesheet'>
<link href='{{URL::asset(&#39;css/main.css&#39;) }}' media='all' rel='stylesheet'>
<link href='{{URL::asset(&#39;css/slider.css&#39;) }}' media='all' rel='stylesheet'>
<link href='{{URL::asset(&#39;css/slick.css&#39;) }}' media='all' rel='stylesheet'>
<link href='{{URL::asset(&#39;css/slick-theme.css&#39;) }}' media='all' rel='stylesheet'>
<link href='{{URL::asset(&#39;css/projects.css&#39;) }}' media='all' rel='stylesheet'>
<link href='{{URL::asset(&#39;css/cover.css&#39;) }}' rel='stylesheet'>
<script src='{{ URL::asset(&#39;js/modernizr.custom.37797.js&#39;) }}'></script>
<script src='{{ URL::asset(&#39;js/main.js&#39;) }}'></script>
<script src='{{ URL::asset(&#39;js/slick.min.js&#39;) }}'></script>
<script src='{{ URL::asset(&#39;js/slider.js&#39;) }}'></script>
<script src='https://code.jquery.com/jquery-2.2.0.min.js' type='text/javascript'></script>
<script src='https://raw.github.com/morr/jquery.appear/master/jquery.appear.js' type='text/javascript'></script>
<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js'></script>
<script>
  !window.jQuery && document.write('<script src="/js/jquery-1.6.1.min.js"><\/script>')
</script>
</head>
<body>
<a name='top'></a>
<div class='masthead clearfix'>
<div class='inner'>
<div class='masthead-brand'>
<div class='brandImg'>
<img alt='' src='img/kaf-logo.png'>
</div>
<div class='brandName'>
<a href='/'>
<h4>
{{$header_title}}
</h4>
</a>
</div>
</div>
<a href='auth/login'>
<div class='login'>Войти</div>
</a>
<!--  -->
</div>
</div>
<div class='site-wrapper'>
<div class='site-wrapper-left'>
<div class='left-menu'>
<div class='left-menu-item'>
<div class='left-menu-img'>
<img alt='home' src='img/home.png'>
</div>
<a href='/'>{{$main}}</a>
</div>
<div class='left-menu-item'>
<div class='left-menu-img'>
<img alt='projects' src='img/project.png'>
</div>
<a href='/projectsPage'>{{$projects}}</a>
</div>
<div class='left-menu-item'>
<div class='left-menu-img'>
<img alt='group' src='img/group.png'>
</div>
<a href='/developers'>Разработчики</a>
</div>
</div>
</div>
<div class='site-wrapper-inner'>
<div class='cover-container'>
<div class='cover'>
<h1 class='cover-heading'>Библиотека проектов кафедры ИС.</h1>
<p class='lead'>
Данный сайт посвящен учебной и исследовательской деятельности кафедры "информационные системы" Севастопольского государственного университета.
</p>
</div>
</div>
<div class='container marketing'>
<div class='row featurette'>
<div class='col-md-7'>
<h2 class='featurette-heading'>
Аудиторные помещения.
<span class='text-muted'>С новейшим оборудованием.</span>
</h2>
<p class='lead'>
Аудитории кафедры просторные, светлые, оснащены новейшими техническими средствами, позволяющие выполнять сложные задачи.
</p>
</div>
<div class='col-md-5'>
<img alt='Generic placeholder image' class='featurette-image img-responsive' src='img/small/classroom1.jpg'>
</div>
</div>
<div class='row featurette'>
<div class='col-md-5'>
<img alt='Generic placeholder image' class='featurette-image img-responsive' src='img/small/teach1.jpg'>
</div>
<div class='col-md-7'>
<h2 class='featurette-heading'>
Преподавательский состав.
<span class='text-muted'>Лучшая квалификация.</span>
</h2>
<p class='lead'>
Каждый преподаватель на кафедре разносторонен и профессионален как в своей основной специализации, так и в смежных областях.
</p>
</div>
</div>
<div class='row featurette'>
<div class='col-md-7'>
<h2 class='featurette-heading'>
Оборудование
<span class='text-muted'>Остается только позавидовать.</span>
</h2>
<p class='lead'>
Оборудование, которое находится в собственности кафедры - это компьютеры с мощнейшей начинкой, мониторы с высоким разрешением, оборудование для геосистем, 3Д-сканеры.
</p>
</div>
<div class='col-md-5'>
<img alt='Generic placeholder image' class='featurette-image img-responsive' src='img/small/eq1.jpg'>
</div>
</div>
<footer>
<p class='pull-right'>
<a href='#top'>Наверх</a>
</p>
<p>
© 2018 СевГУ, ИС. ·
<a href='#'>Все права защищены</a>
·
<a href='#'>Севастополь</a>
</p>
</footer>
</div>
<div class='mastfoot'></div>
</div>
</div>
</body>
</html>
