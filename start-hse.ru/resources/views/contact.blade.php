@extends('layouts.site')

@section('content')
    <style>
        .invalid-feedback{
            display: block;
            color: red;
        }
        
    </style>
    

        <section id="contact">
            <div class="container">
<style>
    .allert{
        padding: 2%;
    }
</style>
                <h3><strong>Обратная связь</strong></h3>
                <hr>

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
                        <div style="max-width: 600px;margin-bottom: 20px;">
                            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A60f1c87f6e762f8cf8125f636233f906e351f0b75d7550413a3d39102a1ee76c&amp;width=100%&amp;height=350&amp;lang=ru_RU&amp;scroll=true"></script>
                        </div>
                    </div>
                    <div class="col-md-5">
                        @if (Session::has('flash_message'))
                            <div class="allert alert-success" role="alert">
                                {{Session::get('flash_message')}}
                            </div>
                        @endif
                        <h4 class="que"><strong>Остались вопросы?</strong></h4>
                        <form method="POST" action="{{route('contact.store')}}">
                            {{csrf_field()}}
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" value="" placeholder="Имя" required>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" value="" placeholder="E-mail" required>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="5" placeholder="Сообщение" required></textarea>
                            </div>
                            <button class="btn btn-default" type="submit" name="button">
                                <i class="fa fa-paper-plane-o" aria-hidden="true"></i> Отправить
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

    

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

        img{
            width: 600px !important;
            height: 270px !important;
        }
        @media screen and (max-device-width: 800px){
            img{
            width: auto !important;
            height: auto !important;
        }
        }
    </style>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <section class="team">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="col-lg-12">
                        <h6 class="description">НАША КОМАНДА</h6>
                        <div class="row pt-md">
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
                                <div class="img-box">
                                    <img src="{{asset('storage/persons/1.jpg')}}" class="img-responsive">
                                    <ul class="text-center">
                                        <a href="https://vk.com/pavel5600" target="_blank"><li><i class="fa fa-vk"></i></li></a>
                                    </ul>
                                </div>
                                <h1>Паша Бахаруев</h1>
                                <h2>Сооснователь / IT-специалист</h2>
                                <p>Координирует работу проекта, поодерживает сайт</p>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
                                <div class="img-box">
                                    <img src="{{asset('storage/persons/2.jpg')}}" class="img-responsive">
                                    <ul class="text-center">
                                        <a href="https://vk.com/alexandra_bakalova" target="_blank"><li><i class="fa fa-vk"></i></li></a>
                                    </ul>
                                </div>
                                <h1>Саша Бакалова</h1>
                                <h2>Сооснователь / управляющий</h2>
                                <p>Координирует деятельность проекта</p>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
                                <div class="img-box">
                                    <img src="{{asset('storage/persons/3.jpg')}}" class="img-responsive">
                                    <ul class="text-center">
                                        <a href="https://vk.com/ann_bukreeva" target="_blank"><li><i class="fa fa-vk"></i></li></a>
                                    </ul>
                                </div>
                                <h1>Аня Букреева</h1>
                                <h2>HR-менеджер / PR-менеджер</h2>
                                <p>Привлекает в проект новых организаторов и участников.</p>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
                                <div class="img-box">
                                    <img src="{{asset('storage/persons/4.jpg')}}" class="img-responsive">
                                    <ul class="text-center">
                                        <a href="https://vk.com/nastya6697051" target="_blank"><li><i class="fa fa-vk"></i></li></a>
                                    </ul>
                                </div>
                                <h1>Настя Тинякова</h1>
                                <h2>Организатор</h2>
                                <p>Организует мероприятия проекта</p>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
                                <div class="img-box">
                                    <img src="{{asset('storage/persons/5.jpg')}}" class="img-responsive">
                                    <ul class="text-center">
                                        <a href="https://vk.com/xiwichii" target="_blank"><li><i class="fa fa-vk"></i></li></a>
                                    </ul>
                                </div>
                                <h1>Анфиса Уварова</h1>
                                <h2>Организатор</h2>
                                <p>Организует мероприятия проекта</p>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
                                <div class="img-box">
                                    <img src="{{asset('storage/persons/6.jpg')}}" class="img-responsive">
                                    <ul class="text-center">
                                        <a href="https://vk.com/vladsizyi" target="_blank"><li><i class="fa fa-vk"></i></li></a>
                                    </ul>
                                </div>
                                <h1>Влад Сизов</h1>
                                <h2>Менеджер</h2>
                                <p>Привлекает компаний-партнеров к проведению меропрятий</p>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
                                <div class="img-box">
                                    <img src="{{asset('storage/persons/7.jpg')}}" class="img-responsive">
                                    <ul class="text-center">
                                        <a href="https://vk.com/veronikavakhlyaeva" target="_blank"><li><i class="fa fa-vk"></i></li></a>
                                    </ul>
                                </div>
                                <h1>Вероника Вахляева</h1>
                                <h2>Менеджер</h2>
                                <p>Привлекает компаний-партнеров к проведению меропрятий</p>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
                                <div class="img-box">
                                    <img src="{{asset('storage/persons/8.jpg')}}" class="img-responsive">
                                    <ul class="text-center">
                                        <a href="https://docs.google.com/forms/d/e/1FAIpQLSf9dGcoB3pO04dxUNPIf_ZpevxsGZAzXIc5h6DtrgHTKJegig/viewform?usp=sf_link" target="_blank"><li><i class="fa fa-briefcase"></i></li></a>
                                    </ul>
                                </div>
                                <h1>Место для тебя</h1>
                                <h2>Становись кем тебе по-душе</h2>
                                <p>В проекте открыт набор лицеистов 10 и 9 классов</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection