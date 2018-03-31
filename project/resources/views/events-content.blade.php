@extends('layouts.site')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="page-header">
                    <h3>Мероприятия:</h3>
                </div>
                @foreach ($events as $event)
                    <div class="row">
                        <div class="col-md-3">
                            <a href="{{ route ('articleShow',['id'=>$event->id]) }}" class="thumbnail">
                                <img src="{{$event->img}}" alt="">
                            </a>
                        </div>
                        <div class="col-md-9">
                            <h4><a href="{{ route ('articleShow',['id'=>$event->id]) }}" class="even">{{$event->title}}</a></h4>
                            <p>
                                {{$event->desc}}
                            </p>
                            <p><a class="btn btn-info btn-sm" href="{{ route ('articleShow',['id'=>$event->id]) }}">Читать полностью</a></p>
                            <br/>
                            <ul class="list-inline">
                                <li><i class="glyphicon glyphicon-list"></i> {{$event->status}} |</li>
                                <li><i class="glyphicon glyphicon-calendar"></i> {{$event->datetime}}  </li>
                            </ul>
                        </div>
                    </div>
                    <hr>
                @endforeach
            </div>
            <div class="col-md-3">
                slidebar
            </div>
        </div>
    </div>

@endsection