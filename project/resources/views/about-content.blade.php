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
            </div>
            <div class="col-md-3">
                <br><br><br><br><br>
                <p>
                    Start — проект профориентации, стажировок и развития
                    профессиональных навыков лицеистов. Если вы хотите узнать,
                    к чему вы готовитесь уже 10 или 11 лет, понять, как не
                    потеряться в современном мире и добиться успеха, научиться
                    правильно заполнять CV, освоить основы Web дизайна или просто
                    познакомиться с новыми людьми и получить связи в больших компаниях,
                    то вам сюда! Наша команда готова предложить амбициозным лицеистам
                    интересные встречи с успешными людьми, лекции, семинары, экскурсии,
                    программы крутых стажировок в ведущих компаниях и еще много полезных ивентов!
                </p>
            </div>
        </div>
    </div>
@endsection