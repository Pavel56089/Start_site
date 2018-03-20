@extends('layouts.site')
@section('content')

     <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="page-header">
                    <h3>О START</h3>
                    <div id="myCarousel" class="carousel slide" data-interval="5000" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>

                            <li data-target="#myCarousel" data-slide-to="2"></li>
                            <li data-target="#myCarousel" data-slide-to="3"></li>
                            <li data-target="#myCarousel" data-slide-to="4"></li>
                        </ol>
                        <!-- Слайды карусели -->
                        <div class="carousel-inner">
                            <div class="active item">
                                <img src="{{asset('images/aboutus/slide1.jpg')}}" alt="" class="slide">
                            </div>

                            <div class="item">
                                <img src="{{asset('images/aboutus/slide2.jpg')}}" alt="" class="slide">
                            </div>

                            <div class="item">
                                <img src="{{asset('images/aboutus/slide3.jpg')}}" alt="" class="slide">
                            </div>

                            <div class="item">
                                <img src="{{asset('images/aboutus/slide4.jpg')}}" alt="" class="slide">
                            </div>

                            <div class="item">
                                <img src="{{asset('images/aboutus/slide5.jpg')}}" alt="" class="slide">
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
                    <p>
                        Start помогает учащимся  познакомиться с современным рынком труда,
                        пообщаться с профессионалами, добившимися успеха людьми, услышать
                        их советы, а также посмотреть на лидирующие компании и их методы
                        работы изнутри. Это даст целеустремленным лицеистам представление о
                        жизни после обучения и, возможно, побудит их скорректировать
                        образовательную траекторию под запросы нового рынка.
                    </p>
            </div>
            <div class="col-md-3">
                slidebar
            </div>
        </div>
    </div>
@endsection