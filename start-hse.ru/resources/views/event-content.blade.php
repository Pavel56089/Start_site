@extends('layouts.site')

@section('content')

    @if($event)
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="page-header">
                        <h3>{{ $event->title }}</h3>
                    </div>

                    <img src="{{$event->img }}" alt="Здесь должна быть картинка" width="700px" align="center"><br><br>
                    {{ $event->desc}}
                </div>
                <div class="col-md-3">
                    slidebar
                </div>
            </div>
        </div>
    @endif

@endsection