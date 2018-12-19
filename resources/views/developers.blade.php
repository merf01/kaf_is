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


    <title>Пользователи</title>
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
                    <div class="left-menu-img"> <img src="img/group.png" alt="group"> </div> <a href="/developers"> Разработчики</a>
                </div>


            </div>
        </div>

        <div class="site-wrapper-inner">

            <div class="cover-container">


                <div class="cover">
                    <h1 class="cover-heading">Разработчики - пользователи сайта.</h1>
                    <p class="lead">
Каждый пользователь является разработчиком какого-либо проекта.
                    </p>



                </div>

            </div>


                <div id="content">
                    <table class="usersList">
                      <tr>
                        <td class="userId">ID</td>
                        <td class="userName">Username</td>
                      </tr>
                        @if($users->count())
                        @foreach($users as $user)

                         <tr class="singleUser">

                        <td class="userId">
                          {{$user->id}}
</td>
                        <td class="userName">
                          {{$user->name}}
</td>
</tr>

                        @endforeach
                        @endif
                      </table>
                    </div>
                <footer>
                    <p class="pull-right"><a href="#top">Back to top</a></p>
                    <p>&copy; 2018 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
                </footer>
</div>



        </div>


</body>

</html>
