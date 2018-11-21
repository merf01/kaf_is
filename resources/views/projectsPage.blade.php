<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" media="all" href="{{ URL::asset('css/main.css') }}" />
    <link rel="stylesheet" media="all" href="{{ URL::asset('css/projects.css') }}" />

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

        <div id="content">
            <!-- <div class="bcground"> -->
                <div class="projects_list">
                    <article id="project">
                        <header>
                            <h1> <a href="projectPage.html" class="a_project"  > Название проекта 1 </a> </h1>
                        </header>
                        <div class="projects_list_content">
                            <div class="projects_list_text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                            </div>
                            <div class="projects_list_img"> <img src="img/project1.jpg">
                            </div>
                            </div>
                    </article>
                    <article id="project">
                        <header>
                            <h1>Название проекта 2</h1>
                        </header>
                        <div class="projects_list_content">
                            <div class="projects_list_text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                            </div>
                            <div class="projects_list_img"> <img src="img/project2.jpg">
                            </div>
                            </div>
                    </article>
                    <article id="project">
                        <header>
                            <h1>Название проекта 3</h1>
                        </header>
                        <div class="projects_list_content">
                            <div class="projects_list_text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                            </div>
                            <div class="projects_list_img"> <img src="img/project3.jpg">
                            </div>
                            </div>
                    </article>

                </div>
            <!-- </div> -->
        </div>

        <!-- Parallax foreground -->
        <div id="parallax-bg3">
            <!-- <img id="bg3-1" src="img/.png" width="529" height="757" alt="Montgolfier hot air balloon"/> -->

            <div class="bg3_content_img" id="bg3-2"> <img src="img/classroom1.png" alt="Frameless parachute"/> </div>
                <div class="bg3_content_img" id="bg3-3"> <img src="img/eq1.jpg"  alt="Blanchard's air balloon"/> </div>
                    <div class="bg3_content_img" id="bg3-4"> <img src="img/teach1.jpg"  alt="Landscape with trees and cows"/> </div>
                    </div>

                    <!-- Parallax  midground clouds -->
                    <div id="parallax-bg2">
                        <img id="bg2-1" src="img/el.png" alt="cloud"/>
                        <img id="bg2-2" src="img/el.png" alt="cloud"/>
                        <img id="bg2-3"src="img/el.png" alt="cloud"/>
                        <img id="bg2-4" src="img/el.png" alt="cloud"/>
                        <!-- <img id="bg2-5" src="img/cloud-lg1.png" alt="cloud"/> -->
                    </div>

                    <!-- Parallax  background clouds -->
                    <div id="parallax-bg1">
                        <img id="bg1-1" src="img/el2.png" alt="cloud"/>
                        <img id="bg1-2" src="img/el2.png" alt="cloud"/>
                        <img id="bg1-3" src="img/el2.png" alt="cloud"/>
                        <img id="bg1-4" src="img/el2.png" alt="cloud"/>
                        <!-- <img id="bg1-4" src="img/cloud-lg2.png" alt="cloud"/> -->
                    </div>


                </div>
</body>

</html>
