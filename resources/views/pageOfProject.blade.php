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


    <title>{{$project->title}} </title>
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
            </div>
        </div>
        <div class="site-wrapper-inner">

            <div class="cover-container">



                <div class="cover">
                    <h1 class="cover-heading">{{$project->title}}</h1>
                    <p class="lead"> {{$project->description}}</p>


                    <!--
                    <p class="lead">
                        <a href="#" class="btn btn-lg btn-default">Learn more</a>
                    </p>
-->

                </div>

            </div>

            <div class="container">
                <div id="content">


                   <div class="memberContainer">
                       <div class="cover-heading"> <h1> Над проектом работали</h1> </div>
                    <div class="memberList">
                        <div class="memberItem">
                            <div class="memberImg"> <img src="svg/140.svg" alt="Generic placeholder image"> </div>
                            <div class="memberName">Разработчик 1</div>
                            <p class="memberDesc">Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. </p>
                        </div><!-- /.memberItem -->

                        <div class="memberItem">
                            <div class="memberImg"> <img src="svg/140.svg" alt="Generic placeholder image"> </div>
                            <div class="memberName">Разработчик 2</div>
                            <p class="memberDesc">Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                        </div><!-- /.memberItem -->

                        <div class="memberItem">
                            <div class="memberImg"> <img src="svg/140.svg" alt="Generic placeholder image"> </div>
                            <div class="memberName">Разработчик 3</div>
                            <p class="memberDesc">Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. </p>
                        </div><!-- /.memberItem -->


                    </div><!-- /.row -->
</div>



                    <div class="projectBody">
                        <div class="projectText">
                            <p>{{$project->description}}</p>

                        </div>
                        <div class="projectImgContainer">

                              @foreach ($project->images as $image)
                              <div class="projectImg"> <img src="{{asset('/storage/'.$image)}} ">  </div>
                                @endforeach
                        </div>

                    </div>



                  <!--comment section-->
                  @foreach($comments as $comment)
                    <div class="comment">
                      <p>{{_user($comment->user_id)->email}}</p>
                      <p>{{$comment->created_at->format('d-m-Y')}}</p>
                      <p>{{$comment->comment_text}}</p>

                    </div>
                    @endforeach

                    @if (Auth::check())

                  <form action="{{ route('comments.store') }}" method="POST" enctype="multipart/form-data">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="project_id" value="{{$project->id}}">


                      <div class="form-group @if($errors->has('comment_text')) has-error @endif">
                             <label for="comment_text-field">Комментарий</label>
                          <input type="text" id="comment_text-field" name="comment_text" class="form-control" />
                             @if($errors->has("comment_text"))
                              <span class="help-block">{{ $errors->first("comment_text") }}</span>
                             @endif
                          </div>


                              <button type="submit" class="btn btn-primary">Добавить комментарий</button>

                      </form>
                      @endif
                <!--comment section-->
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
