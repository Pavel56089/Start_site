<!DOCTYPE HTML>
    <html>
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=UTF-8"/ >
        <title>START-Лицей НИУ ВШЭ</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <link rel="shortcut icon" href="{{asset('favicon.ico')}}" type="image/x-icon">
        <!-- Дополнение к теме -->

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/demo.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/footer-distributed-with-address-and-phones.css')}}">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

        <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
        <style>
            .brant{
                color: #fff;
            }
        </style>
    </head>
    <body>

    {{--Навигационная панель--}}
    <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
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

    <div class="contai">
        <footer class="footer-distributed">

            <div class="footer-left">

                <h4 class="brant">ST<span>ART</span></h4>

                <p class="footer-links">
                    <a href="{{ url('/') }}">Главная</a>
                    ·
                    <a href="{{ url('events') }}">Мероприятия</a>
                    ·
                    <a href="{{ url('aboutus') }}">О нас</a>
                    ·
                    <a href="{{ url('contact') }}">Контакты</a>
                </p>

                <p class="footer-company-name">Павел Бахаруев &copy; 2018</p>
            </div>

            <div class="footer-center">

                <div>
                    <i class="fa fa-map-marker"></i>
                    <p><span>Солянка, 14а ст. 1</span> Москва</p>
                </div>

                <div>
                    <i class="fa fa-phone"></i>
                    <p>+7(977)865-02-72</p>
                </div>

                <div>
                    <i class="fa fa-envelope"></i>
                    <p><a href="mailto:welcome@start-hse.ru">welcome@start-hse.ru</a></p>
                </div>

            </div>

            <div class="footer-right">

                <p class="footer-company-about">
                    <span>О нас</span>
                    Start — проект профориентации, стажировок и развития профессиональных навыков лицеистов.
                </p>

                <div class="footer-icons">

                    <a href="https://vk.com/start_hse"><i class="fa fa-vk"></i></a>
                    <a href="https://www.facebook.com/starthse"><i class="fa fa-facebook"></i></a>

                </div>

            </div>

        </footer>
    </div>	<!--jQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- Последняя компиляция и сжатый JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    </body>

