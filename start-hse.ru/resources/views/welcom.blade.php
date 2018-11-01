@extends('layouts.site')

@section('content')
    <style>
        div.item1{
            background: url({{asset('storage/bg/avito.jpg')}}) 100% 100% no-repeat; /* Добавляем фон */
        }

        div.item2{
            background: url({{asset('storage/bg/st-bg.jpg')}}) 100% 100% no-repeat; /* Добавляем фон */
        }

        div.item3{
            background: url({{asset('storage/bg/bug_bg.jpg')}}) 100% 100% no-repeat; /* Добавляем фон */
        }
        div.item {
            height: 350px; /* Высота блока */
            border: 0px solid #000; /* Параметры рамки */
            background-size: cover; /* Масштабируем фон */
        }
    </style>
    <div class="">
        <div id="myCarousel" class="carousel slide" data-interval="5000" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>

                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <!-- Слайды карусели -->
            <div class="carousel-inner">
                <div class="active item item1">
                    <div class="carousel-caption">
                        <h3>START</h3>
                        <p >проект профориентации, стажировок и развития профессиональных навыков лицеистов.</p>
                        <a href="{{ url('aboutus') }}" class="btn btn-primary btn-lg">Подробнее</a>
                    </div>
                </div>
                <!-- Слайд №2 -->
                <div class="item item2">
                    <div class="carousel-caption">
                        <h3>Открыт набор в проект</h3>
                        <p>Приглашаем 10-ые классы вступить в наши ряды</p>
                        <a class="btn btn-primary btn-lg btn-success" href="https://docs.google.com/forms/d/e/1FAIpQLSf9dGcoB3pO04dxUNPIf_ZpevxsGZAzXIc5h6DtrgHTKJegig/viewform?usp=sf_link">Подать заявку</a>
                    </div>
                </div>
                <!-- Слайд №3 -->
                <div class="item item3">
                    <div class="carousel-caption">
                        <h3>Открылся сайт</h3>
                        <p>Если вы нашли ошибку на сайте, напишите нам</p>
                        <a class="btn btn-primary btn-lg btn-danger" href="{{ url('contact') }}">Нашел</a>
                    </div>
                </div>
            </div>
            <!-- Навигация для карусели -->
            <!-- Кнопка, осуществляющая переход на предыдущий слайд с помощью атрибута data-slide="prev" -->
            <a class="carousel-control left" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <!-- Кнопка, осуществляющая переход на следующий слайд с помощью атрибута data-slide="next" -->
            <a class="carousel-control right" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="page-header">
                    <h3>Последние новости</h3>
                </div>
                @foreach ($posts as $post)
                <div class="row">
                    <div class="col-md-3">
                        <a href="/{{ $post->slug }}" class="thumbnail">
                            <img src="http://start-hse.ru/storage/{{$post->image}}" alt="">
                        </a>
                    </div>
                    <div class="col-md-9">
                        <h4><a href="/{{ $post->slug }}">{{$post->title}}</a></h4>
                        <p>
                            {{$post->excerpt}}
                        </p>
                        <p><a class="btn btn-info btn-sm" href="/{{ $post->slug }}">Подробнее</a></p>
                        <br/>
                        {{--<ul class="list-inline">--}}
                            {{--<li><i class="glyphicon glyphicon-list"></i> {{$article->category}} |</li>--}}
                            {{--<li><i class="glyphicon glyphicon-calendar"></i> {{$article->date}}  </li>--}}
                        {{--</ul>--}}
                    </div>
                </div>
                <hr>
                @endforeach
                
                <h4><a href="posts">Все новости</a></h4>
            </div>
            <div class="col-md-3">
                <!--Сайдбар-->
                
                <br>
                
                <script type="text/javascript" async="async" defer="defer" charset="UTF-8" src="https://timepad.ru/js/tpwf/loader/min/loader.js" data-timepad-customized="37187" data-timepad-apidomain="timepad.ru" data-timepad-widget-v2="event_list3"></script>
                <!--VK-->
                <script type="text/javascript" src="//vk.com/js/api/openapi.js?154"></script>

                <!-- VK Widget -->
                
                <div id="vk_groups" class="container"></div>
                <script type="text/javascript">
                VK.Widgets.Group("vk_groups", {mode: 3}, 78826729);
                </script>
                <br>
                
            </div>
        </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

@endsection
