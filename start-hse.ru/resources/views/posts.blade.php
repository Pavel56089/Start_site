@extends('layouts.site')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="page-header">
                <h3>Все новости:</h3>
            </div>
            @foreach ($posts as $post)
                <div class="row">
                    <div class="col-md-3">
                        <a href="/{{ $post->slug }}" class="thumbnail">
                            <img src="http://start-hse.ru/storage/{{$post->image}}" alt="">
                        </a>
                    </div>
                    <div class="col-md-9">
                        <h4><a href="/{{ $post->slug }}">{{$post->title}}</a></h4>
                        <p>
                            {{$post->excerpt}}
                        </p>
                        <p><a class="btn btn-info btn-sm" href="/{{ $post->slug }}">Подробнее</a></p>
                        <br/>
                        {{--<ul class="list-inline">--}}
                        {{--<li><i class="glyphicon glyphicon-list"></i> {{$article->category}} |</li>--}}
                        {{--<li><i class="glyphicon glyphicon-calendar"></i> {{$article->date}}  </li>--}}
                        {{--</ul>--}}
                    </div>
                </div>
                <hr>
            @endforeach
            <br>
            {{ $posts->links() }}
        </div>
        <div class="col-md-3">
            <br>
                
                <script type="text/javascript" async="async" defer="defer" charset="UTF-8" src="https://timepad.ru/js/tpwf/loader/min/loader.js" data-timepad-customized="37187" data-timepad-apidomain="timepad.ru" data-timepad-widget-v2="event_list3"></script>
                <!--VK-->
                <script type="text/javascript" src="//vk.com/js/api/openapi.js?154"></script>

                <!-- VK Widget -->
                
                <div id="vk_groups" class="container"></div>
                <script type="text/javascript">
                VK.Widgets.Group("vk_groups", {mode: 3}, 78826729);
                </script>
                <br>
        </div>
    </div>
</div>

@endsection