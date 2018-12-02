<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <link rel="stylesheet" media="all" href="{{ URL::asset('css/main.css') }}" />
    <link rel="stylesheet" media="all" href="{{ URL::asset('css/projects.css') }}" />
  <link href="{{ URL::asset('css/cover.css') }}" rel="stylesheet">

    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <!-- <meta http-equiv="X-UA-Compatible" content="ie=edge"> -->

    <script src="{{ URL::asset('js/modernizr.custom.37797.js') }}"></script>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
    <script>
        !window.jQuery && document.write('<script src="/js/jquery-1.6.1.min.js"><\/script>')
    </script>
    <script src="{{ URL::asset('js/parallax.js') }}"></script>


    <title>Проекты</title>
</head>

<body>

    <div id="wrapper">

<!--
        <header id="kafedra_info">
            <div class="header_links_flex">
                <div class="left_block">

                    <div class="kaf_logo_">
                        <a href="/">   <img class="kaf_logo_" src="img/kaf-logo.png"> </a>
                    </div>

                    <div class="kaf_name">
                        <b> Кафедра <br>
            Информационные Системы
          </b>
                    </div>

                </div>

                <div class="right_block">

                    <div class="right_block_item">
                        <a href="/projectsPage">  Проекты  |</a>
                    </div>

                    <div class="right_block_item">
                        <a>  AR  </a>
                    </div>

                    <div class="right_block_item">
                        <a>    VR </a>
                    </div>

                </div>
            </div>
        </header>
-->


                 <div class="cover-container">

               <div class="masthead clearfix">
                    <div class="inner">
                        <h4 class="masthead-brand">
                            <div class="brandImg"> <img src="img/kaf-logo.png" alt=""></div>
                          <div class="brandName">  Кафедра <br> Информационные системы </div>
                        </h4>
                        <ul class="nav masthead-nav">
                            <li ><a href="/">Главная</a></li>
                            <li class="active"><a href="/projectsPage">Проекты</a></li>
                            <li><a href="#">Раздел</a></li>
                        </ul>
                    </div>
                </div>

                <div class="cover">
                    <h1 class="cover-heading">Что-то про проекты.</h1>
                    <p class="lead">Cover is a one-page template for building simple and beautiful home pages. Download, edit the text, and add your own fullscreen background photo to make it your own.</p>
<!--
                    <p class="lead">
                        <a href="#" class="btn btn-lg btn-default">Learn more</a>
                    </p>
-->
                </div>
                </div>
                
           
             <div class="container">
               <hr class="featurette-divider">
        <div id="content">
            <!-- <div class="bcground"> -->
                <div class="projects_list">
                    <div id="project">
                        <header>
                             <a href="/pageOfProject" class="a_project"  > Название проекта 1 </a> 
                        </header>
                        <div class="project_content">
                              <div class="project_img"> <img src="img/project1.jpg"/>
                            </div>
                            <div class="project_text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                               
                            </div>
                         
                            </div>
                    </div>
                    
                    <div id="project">
                        <header>
                            <a href="/pageOfProject" class="a_project"  >Название проекта 2</a>
                        </header>
                   <div class="project_content">
                              <div class="project_img"> <img src="img/project1.jpg">
                            </div>
                            <div class="project_text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                   
                            </div>
                         
                            </div>
                    </div>
                    <div id="project">
                        <header>
                            <a href="/pageOfProject" class="a_project"  >Название проекта 3</a>
                        </header>
             <div class="project_content">
                              <div class="project_img"> <img src="img/project1.jpg">
                            </div>
                            <div class="project_text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                   
                            </div>
                         
                            </div>
                    </div>

                </div>
            <!-- </div> -->
        </div>
</div>
        <!-- Parallax foreground -->


                    <!-- Parallax  midground clouds -->
<!--
                    <div id="parallax-bg2">
                        <img id="bg2-1" src="img/el.png" alt="cloud"/>
                        <img id="bg2-2" src="img/el.png" alt="cloud"/>
                        <img id="bg2-3"src="img/el.png" alt="cloud"/>
                        <img id="bg2-4" src="img/el.png" alt="cloud"/>
                         <img id="bg2-5" src="img/cloud-lg1.png" alt="cloud"/> 
                    </div>
-->

                    <!-- Parallax  background clouds -->
<!--
                    <div id="parallax-bg1">
                        <img id="bg1-1" src="img/el2.png" alt="cloud"/>
                        <img id="bg1-2" src="img/el2.png" alt="cloud"/>
                        <img id="bg1-3" src="img/el2.png" alt="cloud"/>
                        <img id="bg1-4" src="img/el2.png" alt="cloud"/>
                         <img id="bg1-4" src="img/cloud-lg2.png" alt="cloud"/> 
                    </div>
-->


                </div>
</body>

</html>
