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
    <script src="{{ URL::asset('js/parallax.js') }}"></script>
</head>

<body>
    <div class="site-wrapper">

        <div class="site-wrapper-inner">

            <div class="cover-container">

                <div class="masthead clearfix">
                    <div class="inner">
                        <h4 class="masthead-brand">
                            <div class="brandImg"> <img src="img/kaf-logo.png" alt=""></div>
                          <div class="brandName">  Кафедра <br> Информационные системы </div>
                        </h4>
                        <ul class="nav masthead-nav">
                            <li class="active"><a href="/">Главная</a></li>
                            <li><a href="/projectsPage">Проекты</a></li>
                            <li><a href="#">Раздел</a></li>
                        </ul>
                    </div>
                </div>

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

                <hr class="featurette-divider">

                <div class="row featurette">
                    <div class="col-md-7">
                        <h2 class="featurette-heading">Аудиторные помещения <span class="text-muted">It'll blow your mind.</span></h2>
                        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
                    </div>
                    <div class="col-md-5">
                        <img class="featurette-image img-responsive" src="svg/index.svg" alt="Generic placeholder image">
                    </div>
                </div>

                <hr class="featurette-divider">

                <div class="row featurette">
                    <div class="col-md-5">
                        <img class="featurette-image img-responsive" src="svg/index.svg" alt="Generic placeholder image">
                    </div>
                    <div class="col-md-7">
                        <h2 class="featurette-heading">Преподавательский состав <span class="text-muted">See for yourself.</span></h2>
                        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
                    </div>
                </div>

                <hr class="featurette-divider">

                <div class="row featurette">
                    <div class="col-md-7">
                        <h2 class="featurette-heading">Оборудование <span class="text-muted">Checkmate.</span></h2>
                        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
                    </div>
                    <div class="col-md-5">
                        <img class="featurette-image img-responsive" src="svg/index.svg" alt="Generic placeholder image">
                    </div>
                </div>

                <hr class="featurette-divider">

                <!-- /END THE FEATURETTES -->


                <!-- FOOTER -->
                <footer>
                    <p class="pull-right"><a href="#">Back to top</a></p>
                    <p>&copy; 2014 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
                </footer>

            </div>

            <div class="mastfoot">

            </div>

        </div>

    </div>

    <!--    </div>-->

    <!-- 
    <div id="wrapper">

    <header id="kafedra_info">
        <div class="header_links_flex">
            <div class="left_block">
                <div class="kaf_logo_">
                    <a href="/"> <img class="kaf_logo_" src="img/kaf-logo.png"> </a>
                </div>

                <div class="kaf_name">
                    <b> Кафедра <br>
                        Информационные Системы
                    </b>
                </div>

            </div>

            <div class="right_block">

                <div class="right_block_item">
                    <a href="/projectsPage"> Проекты |</a>
                </div>

                <div class="right_block_item">
                    <a> AR </a>
                </div>

                <div class="right_block_item">
                    <a> VR </a>
                </div>

            </div>
        </div>
    </header>

    <nav id="primary">
        <ul>
            <li>
                <div>Аудитории</div>
                <a class="classrooms" href="#classrooms">View</a>
            </li>
            <li>
                <div>Оборудование</div>
                <a class="equipment" href="#equipment">View</a>
            </li>
            <li>
                <div>Преподаватели</div>
                <a class="teachers" href="#teachers">View</a>
            </li>
        </ul>
    </nav>

    <div id="content">

        <article id="classrooms">
            <header>
                <h1>Аудитории</h1>
            </header>
            <p>The first clearly recorded instance of a balloon carrying passengers used hot air to generate buoyancy and was built by the brothers Joseph-Michel and Jacques-Etienne Montgolfier in Annonay, France. After experimenting with unmanned balloons and flights with animals, the first tethered balloon flight with humans on board took place on October 15, 1783.</p>
            <nav class="next-prev">
                <hr />
                <a class="next equipment" href="#equipment">Next</a>
            </nav>
        </article>

        <article id="equipment">
            <header>
                <h1>Оборудование</h1>
            </header>
            <p>André-Jacques Garnerin carried out the first jump with a silk parachute on October 22, 1797 at Parc Monceau, Paris. Garnerin's first parachute resembled a closed umbrella before he ascended; at a height of approximately 3,000 feet he severed the rope that connected his parachute to the balloon, and the basket fell to earth. Garnerin emerged uninjured.</p>
            <nav class="next-prev">
                <a class="prev classrooms" href="#classrooms">Prev</a>
                <hr />
                <a class="next teachers" href="#teachers">Next</a>
            </nav>
        </article>

        <article id="teachers">
            <header>
                <h1>Преподаватели</h1>
            </header>
            <p>On January 7, 1785, Jean Pierre Blanchard and Dr. John Jeffries made the first flight over the English Channel, traveling from Dover to France. During the crossing the balloon lost altitude, so they began tossing everything in the gondola they possibly could, even their clothes. About two hours after take off, they crossed the French coast clad only in their underwear.</p>
            <nav class="next-prev">
                <a class="prev equipment" href="#equipment">Prev</a>
                <hr />
                <a class="next about" href="#about">Next</a>
            </nav>
        </article>

    </div>

    
    <div id="parallax-bg3">
        <!-- <img id="bg3-1" src="img/.png" width="529" height="757" alt="Montgolfier hot air balloon"/> 
        

        <div class="bg3_content_img" id="bg3-2"> <img src="img/classroom1.png" alt="Frameless parachute" /> </div>
        <div class="bg3_content_img" id="bg3-3"> <img src="img/eq1.jpg" alt="Blanchard's air balloon" /> </div>
        <div class="bg3_content_img" id="bg3-4"> <img src="img/teach1.jpg" alt="Landscape with trees and cows" /> </div>
    </div>

    <!-- Parallax  midground clouds ->
    <div id="parallax-bg2">
        <img id="bg2-1" src="img/el.png" alt="cloud" />
        <img id="bg2-2" src="img/el.png" alt="cloud" />
        <img id="bg2-3" src="img/el.png" alt="cloud" />
        <img id="bg2-4" src="img/el.png" alt="cloud" />
        <!-- <img id="bg2-5" src="img/cloud-lg1.png" alt="cloud"/> -->
<!--    </div>-->

    <!-- Parallax  background clouds ->
    <div id="parallax-bg1">
        <img id="bg1-1" src="img/el2.png" alt="cloud" />
        <img id="bg1-2" src="img/el2.png" alt="cloud" />
        <img id="bg1-3" src="img/el2.png" alt="cloud" />
        <img id="bg1-4" src="img/el2.png" alt="cloud" />
        <!-- <img id="bg1-4" src="img/cloud-lg2.png" alt="cloud"/> ->
    </div>

</div>
-->

</body>

</html>