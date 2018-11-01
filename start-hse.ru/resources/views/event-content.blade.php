@extends('layouts.site')

@section('content')

<style>
    img.imeg{
        margin: 30px auto;
    }
    
    div.content{
        margin:0 80px ;
    }

    @media only screen and (max-width : 760px) {
        div.content{
            margin:0 auto ;
        }
    }
</style>

    @if($event)
        <div class="container">
            <div class="row">
                <div class="jumbotron col-md-12"  >
                    <h1 align="center">{{ $event->title }}</h1>
                    <p align="center">{{ $event->desc }}</p>

                </div>
                <div class="col-md-12">
                    <div class="container col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <img src="http://start-hse.ru/storage/{{$event->img }}" alt="Здесь должна быть картинка" class="img-responsive imeg" align="center">
                    </div>
                    <div class="content">
                        {!! $event->content  !!}
                        <script src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
<script src="//yastatic.net/share2/share.js"></script>
<div class="ya-share2" data-services="collections,vkontakte,facebook,odnoklassniki" data-counter=""></div>
                    </div>
                </div>
            </div>
        </div>
        
        
    @endif

@endsection