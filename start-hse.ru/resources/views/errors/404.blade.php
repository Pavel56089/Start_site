@extends('layouts.site')

@section('content')


<div class="container-fluid">
    <div class="row">
        <div class="jumbotron col-md-10 col-md-offset-1 text-center"  >
            <h1>Упс! Что-то пошло не так.</h1>
            <p><a href="{{ url('/') }}">Перейти на главную</a></p>

        </div>
    </div>
</div>
@endsection