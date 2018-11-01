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

    @if($post)
            <div class="container">
            <div class="row">
                <div class="jumbotron col-md-12"  >
                    <h1 align="center">{{ $post->title }}</h1>
                    <p align="center">{{ $post->excerpt }}</p>

                </div>
                <div class="col-md-12">
                    <div class="container col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <img src="http://start-hse.ru/storage/{{$post->image }}" alt="Здесь должна быть картинка" class="img-responsive imeg" align="center">
                    </div>
                    <div class="content">
                        {!!$post->body  !!}
                        <script src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
<script src="//yastatic.net/share2/share.js"></script>
<div class="ya-share2" data-services="collections,vkontakte,facebook,odnoklassniki" data-counter=""></div>

                        <br>
                        <!-- Put this script tag to the <head> of your page -->
<script type="text/javascript" src="https://vk.com/js/api/openapi.js?159"></script>

<script type="text/javascript">
  VK.init({apiId: 6711530, onlyWidgets: true});
</script>

<!-- Put this div tag to the place, where the Comments block will be -->
<div id="vk_comments"></div>
<script type="text/javascript">
VK.Widgets.Comments("vk_comments", {limit: 5, attach: "photo,video,audio,link"});
</script>
                    </div>
                </div>
            </div>
        </div>
    @endif

@endsection