<!DOCTYPE html>

<html>



<head>
    <title>ИС</title>
    <meta charset="utf-8" />
    <link href="{{ URL::asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ URL::asset('css/carousel.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/cover.css') }}" rel="stylesheet">
    <script src="{{ URL::asset('js/modernizr.custom.37797.js') }}"></script>
    <script src="{{ URL::asset('js/script.js') }}"></script>

    <!-- Grab Google CDN's jQuery. fall back to local if necessary -->
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
                            <div class="brandName"> <a href="/"> <h4> Кафедра <br> Информационные системы  </h4> </a> </div>
                        </div>
                         <div class="search"><input type="text" name="search" placeholder="Search..">  </div>
<!--
                        <ul class="nav masthead-nav">
                            <li class="active"><a href="/">Главная</a></li>
                            <li><a href="/projectsPage">Проекты</a></li>
                            <li><a href="#">Раздел</a></li>
                        </ul>
-->
                    </div>
                </div>
    <div class="site-wrapper">

        <div class="site-wrapper-left">
            <div class="left-menu">
                <div class="left-menu-item" class="active"> <div class="left-menu-img"> <img src="img/home.png" alt="home"> </div><a href="/"> Главная </a> </div>
                <div class="left-menu-item"> <div class="left-menu-img"><img src="img/project.png" alt="projects">  </div>  <a href="/projectsPage"> Проекты </a> </div>
                <div class="left-menu-item"> <div class="left-menu-img"> <img src="img/group.png" alt="group"> </div> Разработчики </div>

            </div>
        </div>

        <div class="site-wrapper-inner">

            <div class="cover-container">



                <div class="cover">
                    <h1 class="cover-heading">Приветственное сообщение.</h1>
                    <p class="lead">Cover is a one-page template for building simple and beautiful home pages. Download, edit the text, and add your own fullscreen background photo to make it your own.</p>
                    <!--
                    <p class="lead">
                        <a href="#" class="btn btn-lg btn-default">Learn more</a>
                    </p>
-->
                </div>
            </div>

            <div class="container marketing">

                <!-- Three columns of text below the carousel -->


                <!-- START THE FEATURETTES -->

                <!--                <hr class="featurette-divider">-->

                <div class="row featurette">
                    <div class="col-md-7">
                        <h2 class="featurette-heading">Аудиторные помещения <span class="text-muted">It'll blow your mind.</span></h2>
                        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
                    </div>
                    <div class="col-md-5">
                        <img class="featurette-image img-responsive" src="svg/index.svg" alt="Generic placeholder image">
                    </div>
                </div>

                <!--                <hr class="featurette-divider">-->

                <div class="row featurette">
                    <div class="col-md-5">
                        <img class="featurette-image img-responsive" src="svg/index.svg" alt="Generic placeholder image">
                    </div>
                    <div class="col-md-7">
                        <h2 class="featurette-heading">Преподавательский состав <span class="text-muted">See for yourself.</span></h2>
                        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
                    </div>
                </div>

                <!--                <hr class="featurette-divider">-->

                <div class="row featurette">
                    <div class="col-md-7">
                        <h2 class="featurette-heading">Оборудование <span class="text-muted">Checkmate.</span></h2>
                        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
                    </div>
                    <div class="col-md-5">
                        <img class="featurette-image img-responsive" src="svg/index.svg" alt="Generic placeholder image">
                    </div>
                </div>

                <!--                <hr class="featurette-divider">-->

                <!-- /END THE FEATURETTES -->


                <!-- FOOTER -->
                <footer>
                    <p class="pull-right"><a href="#top">Back to top</a></p>
                    <p>&copy; 2018 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
                </footer>

            </div>

            <div class="mastfoot">

            </div>

        </div>

    </div>


</body>

</html>
