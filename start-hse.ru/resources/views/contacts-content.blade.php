@extends('layouts.site')

@section('content')
<style>
    @import url(https://fonts.googleapis.com/css?family=Quicksand:400,300);
    body{
        font-family: 'Quicksand', sans-serif;
    }
    .team{
        padding:75px 0;
    }
    h6.description{
        font-weight: bold;
        letter-spacing: 2px;
        color: #999;
        border-bottom: 1px solid rgba(0, 0, 0,0.1);
        padding-bottom: 5px;
    }
    .profile{
        margin-top: 25px;
    }
    .profile h1{
        font-weight: normal;
        font-size: 20px;
        margin:10px 0 0 0;
    }
    .profile h2{
        font-size: 14px;
        font-weight: lighter;
        margin-top: 5px;
    }
    .profile .img-box{
        opacity: 1;
        display: block;
        position: relative;
    }
    .profile .img-box:after{
        content:"";
        opacity: 0;
        background-color: rgba(0, 0, 0, 0.75);
        position: absolute;
        right: 0;
        left: 0;
        top: 0;
        bottom: 0;
    }
    .img-box ul{
        position: absolute;
        z-index: 2;
        bottom: 50px;
        text-align: center;
        width: 100%;
        padding-left: 0px;
        height: 0px;
        margin:0px;
        opacity: 0;
    }
    .profile .img-box:after, .img-box ul, .img-box ul li{
        -webkit-transition: all 0.5s ease-in-out 0s;
        -moz-transition: all 0.5s ease-in-out 0s;
        transition: all 0.5s ease-in-out 0s;
    }
    .img-box ul i{
        font-size: 20px;
        letter-spacing: 10px;
    }
    .img-box ul li{
        width: 30px;
        height: 30px;
        text-align: center;
        border: 1px solid #88C425;
        margin: 2px;
        padding: 5px;
        display: inline-block;
    }
    .img-box a{
        color:#fff;
    }
    .img-box:hover:after{
        opacity: 1;
    }
    .img-box:hover ul{
        opacity: 1;
    }
    .img-box ul a{
        -webkit-transition: all 0.3s ease-in-out 0s;
        -moz-transition: all 0.3s ease-in-out 0s;
        transition: all 0.3s ease-in-out 0s;
    }
    .img-box a:hover li{
        border-color: #fff;
        color: #88C425;
    }
    a{
        color:#88C425;
    }
    a:hover{
        text-decoration:none;
        color:#519548;
    }
    i.red{
        color:#BC0213;
    }
</style>
        <section class="team">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="col-lg-12">
                                <h6 class="description">НАША КОМАНДА</h6>
                                @foreach($contacts as $contact)
                                <div class="row pt-md">
                                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
                                        <div class="img-box">
                                            <img src="{{ $contact->img }}" class="img-responsive">
                                            <ul class="text-center">
                                                <a href="#"><li><i class="fa fa-facebook"></i></li></a>
                                                <a href="#"><li><i class="fa fa-twitter"></i></li></a>
                                                <a href="#"><li><i class="fa fa-linkedin"></i></li></a>
                                            </ul>

                                        </div>
                                        <h1>{{ $contact->name }}</h1>
                                        <h2>{{ $contact->role }}</h2>
                                        <p>{{ $contact->desc }}</p>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <footer>
                <div class="container">
                </div>
                <section id="contact">
                    <div class="container">

                            <h3><strong>Обратная связь</strong></h3>
<hr>

                        <div class="row">
                            <div class="col-md-7">
                                <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ad14ec2931e33fb30242ed663f4679aa0a6e7b5e088cb2213944b73c133f8860d&amp;width=650&amp;height=320&amp;lang=ru_RU&amp;scroll=true"></script>
                            </div>

                            <div class="col-md-5">
                                <h4><strong>Остались вопросы?</strong></h4>
                                <form method="POST" action="{{route('messageStore')}}">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" value="" placeholder="Имя">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" value="" placeholder="E-mail">
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" name="text" rows="5" placeholder="Сообщение"></textarea>
                                    </div>
                                    <button class="btn btn-default" type="submit" name="button">
                                        <i class="fa fa-paper-plane-o" aria-hidden="true"></i> Отправить
                                    </button>
                                    {{ csrf_field() }}
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
        </div>

@endsection