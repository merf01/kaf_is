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


    <script>
        !window.jQuery && document.write('<script src="/js/jquery-1.6.1.min.js"><\/script>')
    </script>
    <script src="{{ URL::asset('js/parallax.js') }}"></script>
    <script type="text/javascript" src="{{URL::asset('js/jquery-1.6.1.min.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>


    <title>{{$project->title}} </title>

    <meta name="csrf-token" content="{{ csrf_token() }}">

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

                        @if (null!=$project->video)
                        <iframe width="560" height="315" src="{{$project->video}}" frameborder="0" allowfullscreen>
                        </iframe>
                        @endif

                          @if (null!=$project->images)
                        <div class="projectImgContainer">

                              @foreach ($project->images as $image)
                              <div class="projectImg"> <img src="{{asset('/storage/'.$image)}} ">  </div>
                                @endforeach
                        </div>
                        @endif
                    </div>



                  <!--comment section-->
                  <div class="container">
                    <h2>Комментарии</h2>
                    <div class='row'>
                    </div>
                    <br />
                    <div class='row ' id='comments-wrap'>
                      <table class="table table ">
                        <thead>
                        </thead>
                        <tbody>
                          @foreach($comments as $comment)
                          <tr>
                            <td>{{_user($comment->user_id)->email}}</td>
                            <td>{{$comment->created_at->format('d-m-Y')}}</td>
                          </tr>
                          <tr class='comments_text'>
                          <td>  {{$comment->comment_text}}</td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <input type="hidden" id ="project_id" name="project_id" value="{{$project->id}}">
                        @if (Auth::check())
                      <input type="text" id="comment_text-field" name="comment_text" class="form-control" />
                         @if($errors->has("comment_text"))
                          <span class="help-block">{{ $errors->first("comment_text") }}</span>
                         @endif
                    <button type="button" id ="save"class="btn btn-primary btn-lg pull-right " >
                      Добавить комментарий
                    </button>
                        @endif
                  </div>
                <!--comment section-->
                </div>

                <footer>
                    <p class="pull-right"><a href="#top">Back to top</a></p>
                    <p>&copy; 2018 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
                </footer>
            </div>
        </div>

    </div>
    <script>

    $(function() {
      $('#save').on('click',function(){
        var project_id = $('#project_id').val();
        var text = $('#comment_text-field').val();
        $.ajax({
          url: '{{ route('comments.store') }}',
          type: "POST",
          data: {project_id:project_id,comment_text:text},
          headers: {
            'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
          },
          success: function (data) {

            var str = '<tr><td>'+data['user_id']+'</td><td>'+
            data['date']+'</td></tr><tr><td>'+
            data['text']+'</td></tr>';

            $('.table > tbody:last').append(str); document.getElementById('comment_text-field').value = ""
;},
              error: function (msg) {
                alert('Ошибка');   }
              });
            });
          })

</script>

</body>

</html>
