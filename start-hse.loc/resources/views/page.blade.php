@extends('layouts.site')

@section('content')

    @foreach($articles as $article)

        <h1>{{ $article->title }}</h1>

        {!!$article->desc  !!}jj
        <a href="{{route('articleShow', ['id'=>$article->id])}}">Подробнее</a>
    @endforeach
    <p>Что бы читалась хтмл разметка из бд ставим {!!$article->desc  !!}jj</p>


    <h2>ЭТО PAGE</h2>

@endsection