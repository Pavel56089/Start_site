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
                                <input type="text" class="form-control" name="name" value="" placeholder="Имя">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" value="" placeholder="E-mail">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="5" placeholder="Сообщение"></textarea>
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