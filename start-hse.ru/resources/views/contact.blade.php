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


@endsection