@extends('layouts.site')

@section('content')

    @if($event)
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="page-header">
                        <h3>{{ $event->title }}</h3>
                    </div>

                    <img src="https://pp.userapi.com/c841027/v841027720/41a14/SGINfHBhW9w.jpg" alt="Здесь должна быть картинка" width="700px" align="center"><br><br>
                    {{ $event->desc}} <br>
                    <script type="text/javascript" async="async" defer="defer" charset="UTF-8" src="https://timepad.ru/js/tpwf/loader/min/loader.js" data-timepad-customized="35833" data-timepad-widget-v2="event_register">
	(function(){return {"event":{"id":"716178"},"hidePreloading":true,"initialRoute":"button","buttonSettings":{"text":"Зарегистрироваться"}}; })();
</script>
                </div>
                <div class="col-md-3">
                    slidebar
                </div>
            </div>
        </div>
        
        
    @endif

@endsection