@extends('layouts.site')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="page-header">
                    <h3>Мероприятия:</h3>
                </div>
                <div class="row">
                @foreach ($events as $event)
                        <div class="row">
                            <div class="col-md-3">
                                <a href="{{ route ('eventShow',['id'=>$event->id]) }}" class="thumbnail">
                                    <img src="http://start-hse.ru/storage/{{$event->img}}" alt="">
                                </a>
                            </div>
                            <div class="col-md-9">
                                <h4><a href="{{ route ('eventShow',['id'=>$event->id]) }}">{{$event->title}}</a></h4>
                                <p>
                                    {{$event->desc}}
                                </p>
                                @if ($event->status === '1')
                                    <a href="{{ route ('eventShow',['id'=>$event->id]) }}" class="btn btn-sm btn-success">Регистрация открыта</a> Дата и время: {{$event->datetime}}
                                @elseif ($event->status === '2')
                                    <a href="{{ route ('eventShow',['id'=>$event->id]) }}" class="btn btn-sm btn-danger">Регистрация закрыта</a> Дата и время: {{$event->datetime}}
                                @else
                                    <a href="{{ route ('eventShow',['id'=>$event->id]) }}" class="btn btn-sm btn-danger">Мероприятие прошло</a> Дата и время: {{$event->datetime}}
                                @endif
                                <p>

                                </p>
                                <br/>
                            </div>
                        </div>
                        <hr>

                @endforeach

            </div>



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