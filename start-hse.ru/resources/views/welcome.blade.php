@extends('layouts.site')

@section('content')
    <div class="container">
        <div id="myCarousel" class="carousel slide" data-interval="3000" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>

                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <!-- Слайды карусели -->
            <div class="carousel-inner">
                <div class="active item">
                    <img src="{{asset('images/bg/avito.jpg')}}" alt="" class="slide">
                    <div class="carousel-caption">
                        <h3>START</h3>
                        <p>проект профориентации, стажировок и развития профессиональных навыков лицеистов.</p>
                        <button class="btn btn-primary btn-lg">Подробнее</button>
                    </div>
                </div>
                <!-- Слайд №2 -->
                <div class="item">
                    <img src="{{asset('images/bg/st-bg.jpg')}}" alt="" class="slide">
                    <div class="carousel-caption">
                        <h3>Стажировки are coming</h3>
                        <p>Следите за обновлениями на сайте и в группе ВК</p>
                    </div>
                </div>
                <!-- Слайд №3 -->
                <div class="item">
                    <img src="{{asset('images/bg/bug_bg.jpg')}}" alt="" class="slide">
                    <div class="carousel-caption">
                        <h3 class="text-dark">Внимание!</h3>
                        <p class="text-dark">Сайт работает в тестовом режиме. Вы можете сообщить о багах или недостатках.</p>
                        <button class="btn btn-primary btn-lg btn-danger">Сообщить</button>
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
                    <h3>Последние новости:</h3>
                </div>
                @foreach ($articles as $article)
                <div class="row">
                    <div class="col-md-3">
                        <a href="#" class="thumbnail">
                            <img src="{{$article->img}}" alt="">
                        </a>
                    </div>
                    <div class="col-md-9">
                        <h4><a href=""></a>{{$article->title}}</h4>
                        <p>
                            {{$article->desc}}
                        </p>
                        <p><a class="btn btn-info btn-sm" href="{{ route ('articleShow',['id'=>$article->id]) }}">Читать полностью</a></p>
                        <br/>
                        <ul class="list-inline">
                            <li><i class="glyphicon glyphicon-list"></i> {{$article->category}} |</li>
                            <li><i class="glyphicon glyphicon-calendar"></i> {{$article->date}}  </li>
                        </ul>
                    </div>
                </div>
                <hr>
                @endforeach
            </div>
            <div class="col-md-3">
                slidebar
            </div>
        </div>
    </div>

@endsection
