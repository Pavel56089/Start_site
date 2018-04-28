<?php
/**
 * Created by PhpStorm.
 * User: pavel
 * Date: 08.03.2018
 * Time: 21:56
 */
?>
@extends('layouts.site')

@section('content')

    @if($post)
        <div class="container">
            <div class="row">
                <div class="jumbotron" >
                    <h1 align="center">{{ $post->title }}</h1>
                    <p align="center">{{ $post->excerpt }}</p>

                </div>
                <div class="col-md-9">
                    <div class="page-header">
                        <h3>{{ $post->title }}</h3>
                    </div>

                    <img src="http://start-hse.ru/storage/{{$post->image }}" alt="Здесь должна быть картинка" width="700px" align="center"><br><br>
                    {!!$post->body  !!}
                </div>
                <div class="col-md-3">
                    slidebar
                </div>
            </div>
        </div>
    @endif

@endsection

