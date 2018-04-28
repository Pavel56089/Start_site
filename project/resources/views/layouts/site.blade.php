<!DOCTYPE HTML>
    <html>
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=UTF-8"/ >
        <title>Start</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('css/main.css')}}">
        <link rel="shortcut icon" href="{{asset('favicon.ico')}}" type="image/x-icon">
        <!-- Дополнение к теме -->

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        {{--<link rel="stylesheet" type="text/css" href="{{asset('css\main.css')}}" >--}}
        <style>
            .navbar-collapse{
                justify-content: flex-end;
            }

            .even:hover{
                color: green;
                text-decoration: none;
            }
        </style>
    </head>
    <body>

    {{--Навигационная панель--}}
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-main" aria-expanded="false">
                    <span class=sr-only>Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('/') }}">
                    START
                </a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-main">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{ url('/') }}">Главная <span class="sr-only">(current)</span></a></li>
                    <li><a href="{{ url('events') }}">Мероприятия</a></li>
                    <li><a href="{{ url('aboutus') }}">О нас</a></li>
                    <li><a href="{{ url('contact') }}">Контакты</a></li>
                </ul>
            </div>
        </div>
    </nav>
    @if(count($errors) > 0)
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
            <ul>{{$error}}</ul>
            @endforeach
        </div>
    @endif
    @yield('content')
    <br>
    <hr>
    <div class="container">
        <footer>
            <p>&copy; {{ date('Y') }} Павел Бахаруев
            <div align="right"><script src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
                <script src="//yastatic.net/share2/share.js"></script>
                <div class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,moimir,telegram"></div></div>
        </footer>
    </div>	<!--jQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- Последняя компиляция и сжатый JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    </body>

