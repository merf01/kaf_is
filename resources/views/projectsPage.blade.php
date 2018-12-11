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
 <script src="{{ URL::asset('js/main.js') }}"></script>
    <script src="{{ URL::asset('js/tags.js') }}"></script>
    <script src="{{ URL::asset('js/showHide.js') }}"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
    <script>
        !window.jQuery && document.write('<script src="/js/jquery-1.6.1.min.js"><\/script>')
    </script>
 <script>
        !window.jQuery && document.write('<script src="/js/tags.js"><\/script>')
    </script>

    <title>Проекты</title>
</head>

<body>
    <a name="top"> </a>

    <div class="masthead clearfix">
        <div class="inner">
            <h4 class="masthead-brand">
                <div class="brandImg"> <img src="img/kaf-logo.png" alt=""></div>
                <div class="brandName"> <a href="/"> Кафедра <br> Информационные системы </a> </div>
            </h4>
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
                <div class="left-menu-item" class="active">
                    <div class="left-menu-img"> <img src="img/home.png" alt="home"> </div><a href="/"> Главная </a>
                </div>
                <div class="left-menu-item">
                    <div class="left-menu-img"><img src="img/project.png" alt="projects"> </div> <a href="/projectsPage"> Проекты </a>
                </div>
                <div class="left-menu-item">
                    <div class="left-menu-img"> <img src="img/group.png" alt="group"> </div> Разработчики
                </div>
                <div class="left-menu-item">
                    <div class="left-menu-img"> <img src="img/filter.png" alt="group"> </div> 
                    <a href="javascript:void(0)" onclick="showHide('filter_form')">  Фильтр </a>
                </div>
                <div id="filter_form">
                <div class="left-menu-filter" class="filters"> 
                <h5> Технология разработки </h5>
                 <div id="tech">
                     <div class="checkbox"> <label> <input type="checkbox" name="tech[]" value="1"> AR </label></div>
                     <div class="checkbox"> <label> <input type="checkbox" name="tech[]" value="2"> VR </label></div>
                     <div class="checkbox"> <label> <input type="checkbox" name="tech[]" value="3"> Мобильное приложение </label></div>
                     <div class="checkbox"> <label> <input type="checkbox" name="tech[]" value="4"> Десктопное приложение </label></div>
                     <div class="checkbox"> <label> <input type="checkbox" name="tech[]" value="5"> WEB-приложение </label></div>
                 </div>
                  </div>
                    <div class="left-menu-filter" class="filters"> 
                <h5> Статус проекта </h5>
                 <div id="status">
                     <div class="checkbox"> <label> <input type="checkbox" name="status[]" value="1"> Завершен </label></div>
                     <div class="checkbox"> <label> <input type="checkbox" name="status[]" value="2"> В процессе </label></div>
                 </div>
                  </div>
                  </div>
            </div>
        </div>

        <div class="site-wrapper-inner">

            <div class="cover-container">


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
                <!--               <hr class="featurette-divider">-->
                <div id="content">
                    <!-- <div class="bcground"> -->
                    <div class="projects_list">
                        @if($projects->count())

                        @foreach($projects as $project)
                        <div id="project">
                            <header>
                                <div class="project_title"> <a href="{{ route('projects.show', $project->id) }}"> {{$project->title}} </a> </div>
                            </header>
                            <div class="project_content_bg">
                                <div class="project_content">
                                    <div class="project_img"> <img src="{{asset('/uploads/'.$project->img1)}} ">


                                    </div>
                                    <div class="project_text">
                                        <p>{{$project->description}}</p>

                                    </div>
                                    <div class="project_tags"> </div>
                                </div>
                            </div>
                        </div>
                        @endforeach




                        @else
                        <h3 class="text-center alert alert-info">Empty!</h3>
                        @endif


                    </div>
                    {{ $projects->links('paginate') }}
                    <!-- </div> -->
                </div>

                <footer>
                    <p class="pull-right"><a href="#top">Back to top</a></p>
                    <p>&copy; 2018 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
                </footer>
            </div>



        </div>
    </div>

</body>

</html>