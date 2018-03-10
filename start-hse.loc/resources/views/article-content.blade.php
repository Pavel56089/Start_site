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
        <h1>{{ $article->title }}</h1>

        {!!$article->content  !!}

        </div>
    @endif

@endsection
