@extends('layouts.site')

@section('content')
    <div class="container col-xs-12 col-sm-12 ">
        <div id="myCarousel" class="carousel slide" data-interval="3000" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>

                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <!-- Слайды карусели -->
            <div class="carousel-inner">
                <div class="active item">
                    <img src="{{asset('storage/bg/avito.jpg')}}" alt="" class="slide">
                    <div class="carousel-caption">
                        <h3>START</h3>
                        <p>проект профориентации, стажировок и развития профессиональных навыков лицеистов.</p>
                        <a href="/aboutus" class="btn btn-primary btn-lg">Подробнее</a>
                    </div>
                </div>
                <!-- Слайд №2 -->
                <div class="item">
                    <img src="{{asset('storage/bg/st-bg.jpg')}}" alt="" class="slide">
                    <div class="carousel-caption">
                        <h3>Стажировки are coming</h3>
                        <p>Следите за обновлениями на сайте и в группе ВК</p>
                    </div>
                </div>
                <!-- Слайд №3 -->
                <div class="item">
                    <img src="{{asset('storage/bg/bug_bg.jpg')}}" alt="" class="slide">
                    <div class="carousel-caption">
                        <h3 class="text-dark">Внимание!</h3>
                        <p class="text-dark">Сайт работает в тестовом режиме. Вы можете сообщить о багах и проблемах.</p>
                        <button class="btn btn-primary btn-lg btn-danger" data-toggle="modal" data-target="#erModal">Сообщить</button>
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
                @foreach ($posts as $post)
                <div class="row">
                    <div class="col-md-3">
                        <a href="{{ route ('articleShow',['id'=>$post->id]) }}" class="thumbnail">
                            <img src="http://start-hse.ru/storage/{{$post->image}}" alt="">
                        </a>
                    </div>
                    <div class="col-md-9">
                        <h4><a href="{{ route ('articleShow',['id'=>$post->id]) }}">{{$post->title}}</a></h4>
                        <p>
                            {{$post->excerpt}}
                        </p>
                        <p><a class="btn btn-info btn-sm" href="{{ route ('articleShow',['id'=>$post->id]) }}">Подробнее</a></p>
                        <br/>
                        {{--<ul class="list-inline">--}}
                            {{--<li><i class="glyphicon glyphicon-list"></i> {{$article->category}} |</li>--}}
                            {{--<li><i class="glyphicon glyphicon-calendar"></i> {{$article->date}}  </li>--}}
                        {{--</ul>--}}
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
<div id="erModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" data-dismiss="modal">x</button>
                <h4 class="modal-title">Сообщение о проблеме</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <input type="text" class="form-control" name="name" value="" placeholder="Имя">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" name="email" value="" placeholder="E-mail">
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="message" rows="5" placeholder="Сообщение"></textarea>
                </div>
                <button class="btn btn-danger" type="submit" name="button" data-dismiss="modal">
                    <i class="fa fa-paper-plane-o" aria-hidden="true"></i> Отправить
                </button>
            </div>
        </div>
    </div>
</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

@endsection
