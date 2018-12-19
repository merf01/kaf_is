<!DOCTYPE html>


<!--include 'lang.php';-->


<!-- <html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> -->
<html>


 <head>
    <title> {{$title}} </title>
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <link rel="stylesheet" media="all" href="{{ URL::asset('css/main.css') }}" />
    <link rel="stylesheet" media="all" href="{{ URL::asset('css/slider.css') }}" />
    <link rel="stylesheet" media="all" href="{{ URL::asset('css/slick.css') }}" />

    <link rel="stylesheet" media="all" href="{{ URL::asset('css/slick-theme.css') }}" />


    <link rel="stylesheet" media="all" href="{{ URL::asset('css/projects.css') }}" />
    <link href="{{ URL::asset('css/cover.css') }}" rel="stylesheet">


    <script src="{{ URL::asset('js/modernizr.custom.37797.js') }}"></script>
     <script src="{{ URL::asset('js/main.js') }}"></script>
    <script src="{{ URL::asset('js/slick.min.js') }}"></script>
     <script src="{{ URL::asset('js/slider.js') }}"></script>
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
     <script type='text/javascript' src="https://raw.github.com/morr/jquery.appear/master/jquery.appear.js"></script>


    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
    <script>
        !window.jQuery && document.write('<script src="/js/jquery-1.6.1.min.js"><\/script>')
    </script>

</head>

<body>
              <a name="top"> </a>
               <div class="masthead clearfix">
                    <div class="inner">
                        <div class="masthead-brand">
                            <div class="brandImg"> <img src="img/kaf-logo.png" alt=""></div>
                            <div class="brandName"> <a href="/"> <h4>
                               {{$header_title}}
                             </h4> </a> </div>
                        </div>

             <a href="auth/login">      <div class="login">  Войти  </div>  </a>
<!--
-->
                    </div>
                </div>
    <div class="site-wrapper">

        <div class="site-wrapper-left">
            <div class="left-menu">
                <div class="left-menu-item" class="active"> <div class="left-menu-img"> <img src="img/home.png" alt="home"> </div><a href="/"> {{$main}} </a> </div>
                <div class="left-menu-item"> <div class="left-menu-img"><img src="img/project.png" alt="projects">  </div>  <a href="/projectsPage"> {{$projects}} </a> </div>
                <div class="left-menu-item"> <div class="left-menu-img"> <img src="img/group.png" alt="group"> </div> <a href="/developers"> Разработчики </a>  </div>

            </div>
        </div>

        <div class="site-wrapper-inner">

            <div class="cover-container">



                <div class="cover">
                    <h1 class="cover-heading"> Библиотека проектов кафедры ИС.</h1>
                    <p class="lead">
Данный сайт посвящен учебной и исследовательской деятельности кафедры "информационные системы" Севастопольского государственного университета.
                    </p>


                </div>
            </div>

            <div class="container marketing">


                <div class="row featurette">
                    <div class="col-md-7">
                        <h2 class="featurette-heading">Аудиторные помещения. <span class="text-muted"> С новейшим оборудованием. </span></h2>
                        <p class="lead">
                          Аудитории кафедры просторные, светлые, оснащены новейшими техническими средствами, позволяющие выполнять сложные задачи.
                      </p>
                    </div>
                    <div class="col-md-5">
                        <img class="featurette-image img-responsive" src="img/small/classroom1.jpg" alt="Generic placeholder image">
                    </div>
                </div>


                <div class="row featurette">
                    <div class="col-md-5">
                        <img class="featurette-image img-responsive" src="img/small/teach1.jpg" alt="Generic placeholder image">
                    </div>
                    <div class="col-md-7">
                        <h2 class="featurette-heading">Преподавательский состав. <span class="text-muted"> Лучшая квалификация.</span></h2>
                        <p class="lead">
                        Каждый преподаватель на кафедре разносторонен и профессионален как в своей основной специализации, так и в смежных областях.</p>
                    </div>
                </div>


                <div class="row featurette">
                    <div class="col-md-7">
                        <h2 class="featurette-heading">Оборудование <span class="text-muted"> Остается только позавидовать.</span></h2>
                        <p class="lead">
Оборудование, которое находится в собственности кафедры - это компьютеры с мощнейшей начинкой, мониторы с высоким разрешением, оборудование для геосистем, 3Д-сканеры.
                        </p>
                    </div>
                    <div class="col-md-5">
                        <img class="featurette-image img-responsive" src="img/small/eq1.jpg" alt="Generic placeholder image">
                    </div>
                </div>


                <footer>
                    <p class="pull-right"><a href="#top">Наверх</a></p>
                    <p>&copy; 2018 СевГУ, ИС. &middot; <a href="#">Все права защищены</a> &middot; <a href="#"> Севастополь </a></p>
                </footer>

            </div>

            <div class="mastfoot">

            </div>

        </div>

    </div>
<!--
<script type="text/javascript">
    $(function() {
$('.cover-slider').slick({
      dots: true,
             horizontal: true, //направление листания
             centerMode: false, //части соседних новостей
             autoplay: true,
             autoplaySpeed: 5000,
             focusOnSelect: true,
             infinite: true,
             pauseOnHover: true,
             pauseOnDotsHover: true,
             adapiveHeight: true

    });
});
    </script> -->

</body>

</html>
