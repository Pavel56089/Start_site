
@extends('layouts.site')
@section('content')

<style>
    li{
        text-decoration: none;
    }
</style>
<br>

<div class="container col-md-5">
    <button type="button" class="close" aria-hidden="true">&times;</button>
    <h1>Варшавское шоссе д.41</h1><hr>
    <p>
        Назначение объекта:  Земля хозяйственного назначения
        <br><br>
        Кооординаты объекта: x,y
    </p>
    <br>
    <p>
        Урожаемость:
    </p>
    <div class="progress">
        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40"
             aria-valuemin="0" aria-valuemax="100" style="width:90%">
            90%
        </div>
    </div>
    <br>

    <div class="panel panel-success">
        <div class="panel-heading">
            <h3 class="panel-title">Рекомендуется к посадке</h3>
        </div>
        <div class="panel-body">
            <ul>
                <li>Рожь</li>
                <li>Пшеница</li>
                <li>Гречиха</li>
            </ul>
        </div>
    </div>
    <br>
    <div class="panel panel-danger">
        <div class="panel-heading">
            <h3 class="panel-title">НЕ Рекомендуется к посадке</h3>
        </div>
        <div class="panel-body">
            <ul>
                <li>Рожь</li>
                <li>Пшеница</li>
                <li>Гречиха</li>
            </ul>
        </div>
    </div>
    <br>

    <a href="/aboutus" class="btn btn-primary btn-lg">Подробнее</a>
</div>
    <br>


@endsection