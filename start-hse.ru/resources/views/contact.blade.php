@extends('layouts.site')

@section('content')
    <style>
        .invalid-feedback{
            display: block;
            color: red;
        }
    </style>
    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="col-md-6">--}}
                {{--@if (Session::has('flash_message'))--}}
                    {{--<div class="allert alert-success">--}}
                        {{--{{Session::get('flash_message')}}--}}
                    {{--</div>--}}
                {{--@endif--}}
                {{--<h1>Contact form</h1>--}}
                {{--<form method="post" action="{{route('contact.store')}}">--}}
                    {{--{{csrf_field()}}--}}
                    {{--<div class="form-group">--}}
                        {{--<label>Full Name:</label>--}}
                        {{--<input type="text" class="form-control" name="name">--}}
                        {{--@if($errors->has('name'))--}}
                            {{--<small class="form-text invalid-feedback">{{$errors->first('name')}}</small>--}}
                        {{--@endif--}}
                    {{--</div>--}}

                    {{--<div class="form-group">--}}
                        {{--<label>Email:</label>--}}
                        {{--<input type="text" class="form-control" name="email">--}}
                        {{--@if($errors->has('email'))--}}
                            {{--<small class="form-text invalid-feedback">{{$errors->first('email')}}</small>--}}
                        {{--@endif--}}
                    {{--</div>--}}

                    {{--<div class="form-group">--}}
                        {{--<label>Message:</label>--}}
                        {{--<textarea name="message" class="form-control"></textarea>--}}
                        {{--@if($errors->has('message'))--}}
                            {{--<small class="form-text invalid-feedback">{{$errors->first('message')}}</small>--}}
                        {{--@endif--}}
                    {{--</div>--}}
                    {{--<button class="btn btn-primary">Submit</button>--}}
                {{--</form>--}}
            {{--</div>--}}
        {{--</div>--}}

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
                        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ad14ec2931e33fb30242ed663f4679aa0a6e7b5e088cb2213944b73c133f8860d&amp;width=650&amp;height=320&amp;lang=ru_RU&amp;scroll=true"></script>
                    </div>

                    <div class="col-md-5">
                        @if (Session::has('flash_message'))
                            <div class="allert alert-success" role="alert">
                                {{Session::get('flash_message')}}
                            </div>
                        @endif
                        <h4><strong>Остались вопросы?</strong></h4>
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
<hr>

    {{--<style>--}}
        {{--#sendmessage, #senderror {--}}
            {{--border:1px solid #e6e6e6;--}}
            {{--background:#f6f6f6;--}}
            {{--display:none;--}}
            {{--text-align:center;--}}
            {{--padding:15px 12px 15px 65px;--}}
            {{--margin:10px 0;--}}
            {{--font-weight:600;--}}
            {{--margin-bottom:30px;--}}
        {{--}--}}

        {{--#senderror {--}}
            {{--color: #f00;--}}
        {{--}--}}

        {{--#senderror span {--}}
            {{--font-weight: bold;--}}
        {{--}--}}
    {{--</style>--}}
    {{--<div class="col-md-3">--}}
    {{--<form id="contactform" method="POST" class="validateform">--}}
        {{--{{ csrf_field() }}--}}

        {{--<div id="sendmessage">--}}
            {{--Ваше сообщение отправлено!--}}
        {{--</div>--}}
        {{--<div id="senderror">--}}
            {{--При отправке сообщения произошла ошибка. Продублируйте его, пожалуйста, на почту администратора <span>{{ env('MAIL_ADMIN_EMAIL') }}</span>--}}
        {{--</div>--}}
        {{--<div class="row">--}}
            {{--<div class="col-lg-4 field">--}}
                {{--<input type="text" name="name" placeholder="* Введите ваше имя" required />--}}
            {{--</div>--}}
            {{--<div class="col-lg-4 field">--}}
                {{--<input type="email" name="email" placeholder="* Введите ваш email" required />--}}
            {{--</div>--}}
            {{--<div class="col-lg-4 field">--}}
                {{--<input type="text" name="subject" placeholder="* Введите тему сообщения" required />--}}
            {{--</div>--}}
            {{--<div class="col-lg-12 margintop10 field">--}}
                {{--<textarea rows="12" name="message" class="input-block-level" placeholder="* Ваше сообщение..." required></textarea>--}}
                {{--<p>--}}
                    {{--<button class="btn btn-theme margintop10 pull-left" type="submit">Отправить</button>--}}
                    {{--<span class="pull-right margintop20">* Заполните, пожалуйста, все обязательные поля!</span>--}}
                {{--</p>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</form>--}}
    {{--</div>--}}
    {{--<script>--}}
        {{--$(document).ready(function(){--}}
            {{--$('#contactform').on('submit', function(e){--}}
                {{--e.preventDefault();--}}

                {{--$.ajax({--}}
                    {{--type: 'POST',--}}
                    {{--url: '/sendmail',--}}
                    {{--data: $('#contactform').serialize(),--}}
                    {{--success: function(result){--}}
                        {{--console.log(result);--}}
                    {{--}--}}
                {{--});--}}
            {{--});--}}
        {{--});--}}
    {{--</script>--}}

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
                                    <img src="http://nabeel.co.in/files/bootsnipp/team/1.jpg" class="img-responsive">
                                    <ul class="text-center">
                                        <a href=""><li><i class="fa fa-vk"></i></li></a>
                                    </ul>
                                </div>
                                <h1>Саша Бакалова</h1>
                                <h2>Сооснователь / управляющий</h2>
                                <p>Координирует деятельность проекта</p>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
                                <div class="img-box">
                                    <img src="http://nabeel.co.in/files/bootsnipp/team/2.jpg" class="img-responsive">
                                    <ul class="text-center">
                                        <a href="#"><li><i class="fa fa-vk"></i></li></a>
                                    </ul>
                                </div>
                                <h1>Катерина Заливина</h1>
                                <h2>Менеджер</h2>
                                <p>Привлекает новых партнеров.</p>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
                                <div class="img-box">
                                    <img src="http://nabeel.co.in/files/bootsnipp/team/3.jpg" class="img-responsive">
                                    <ul class="text-center">
                                        <a href="#"><li><i class="fa fa-vk"></i></li></a>
                                    </ul>
                                </div>
                                <h1>Аня Букреева</h1>
                                <h2>HR-менеджер / PR-менеджер</h2>
                                <p>Привлекает в проект новых организаторов и участников.</p>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
                                <div class="img-box">
                                    <img src="http://nabeel.co.in/files/bootsnipp/team/4.jpg" class="img-responsive">
                                    <ul class="text-center">
                                        <a href="#"><li><i class="fa fa-facebook"></i></li></a>
                                        <a href="https://vk.com/pavel5600"><li><i class="fa fa-vk"></i></li></a>
                                        <a href="#"><li><i class="fa fa-linkedin"></i></li></a>
                                    </ul>
                                </div>
                                <h1>Павел Бахаруев</h1>
                                <h2>Сооснователь / IT-специалист</h2>
                                <p>Координирует работу проекта, поодерживает сайт</p>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
                                <div class="img-box">
                                    <img src="http://nabeel.co.in/files/bootsnipp/team/5.jpg" class="img-responsive">
                                    <ul class="text-center">
                                        <a href="#"><li><i class="fa fa-facebook"></i></li></a>
                                        <a href="#"><li><i class="fa fa-twitter"></i></li></a>
                                        <a href="#"><li><i class="fa fa-linkedin"></i></li></a>
                                    </ul>
                                </div>
                                <h1>Дима Кочешков</h1>
                                <h2>Менеджер по привлечению партнеров</h2>
                                <p>Привлекает новых партнеров для сотрудничества.</p>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
                                <div class="img-box">
                                    <img src="http://nabeel.co.in/files/bootsnipp/team/6.jpg" class="img-responsive">
                                    <ul class="text-center">
                                        <a href="#"><li><i class="fa fa-facebook"></i></li></a>
                                        <a href="#"><li><i class="fa fa-twitter"></i></li></a>
                                        <a href="#"><li><i class="fa fa-linkedin"></i></li></a>
                                    </ul>
                                </div>
                                <h1>Настя Тинякова</h1>
                                <h2>Администратор-организатор</h2>
                                <p>Организует мероприятия проекта</p>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
                                <div class="img-box">
                                    <img src="http://nabeel.co.in/files/bootsnipp/team/7.jpg" class="img-responsive">
                                    <ul class="text-center">
                                        <a href="#"><li><i class="fa fa-facebook"></i></li></a>
                                        <a href="#"><li><i class="fa fa-twitter"></i></li></a>
                                        <a href="#"><li><i class="fa fa-linkedin"></i></li></a>
                                    </ul>
                                </div>
                                <h1>Анфиса Уварова</h1>
                                <h2>Администратор-организатор</h2>
                                <p>Организует мероприятия проекта</p>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
                                <div class="img-box">
                                    <img src="http://nabeel.co.in/files/bootsnipp/team/8.jpg" class="img-responsive">
                                    <ul class="text-center">
                                        <a href="#"><li><i class="fa fa-facebook"></i></li></a>
                                        <a href="#"><li><i class="fa fa-twitter"></i></li></a>
                                        <a href="#"><li><i class="fa fa-linkedin"></i></li></a>
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
    <footer>
        <div class="container">
            <div class="col-md-10 col-md-offset-1 text-center">

                <h6>Coded with <i class="fa fa-heart red"></i> by <a href="http://www.nabeel.co.in" target="_blank">Nabeel Kondotty</a></h6>
            </div>
        </div>
    </footer>
@endsection