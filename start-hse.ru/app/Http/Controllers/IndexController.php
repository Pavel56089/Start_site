<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Post;


class IndexController extends Controller
{
    //
    public function index(){

        $posts = Post::select(['id', 'title', 'excerpt','image'])->get();

        return view('welcom')->with(['posts'=> $posts]);
    }



    public function show($id){

        $post = Post::select(['id', 'title', 'body', 'image','excerpt'])->where('id',$id)->first();

        return view('article-content')->with(['post' => $post]);
    }

}
