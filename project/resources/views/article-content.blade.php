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

    @if($article)
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="page-header">
                        <h3>{{ $article->title }}</h3>
                    </div>

                    <img src="{{$article->img }}" alt="Здесь должна быть картинка" width="700px" align="center"><br><br>
                    {!!$article->content  !!}
                </div>
                <div class="col-md-3">
                    slidebar
                </div>
            </div>
        </div>
    @endif

@endsection

