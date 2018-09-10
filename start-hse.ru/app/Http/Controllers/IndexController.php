<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Post;


class IndexController extends Controller
{
    //
    public function index(){

        $posts = Post::select(['slug', 'title', 'excerpt','image'])->orderBy('created_at','desc')->paginate(3);;

        return view('welcom')->with(['posts'=> $posts]);
    }
    
    public function posts(){

        $posts = Post::select(['slug', 'title', 'excerpt','image'])->orderBy('created_at','desc')->paginate(5);

        return view('posts')->with(['posts'=> $posts]);
    }



    public function show($slug){

        $post = Post::select(['slug', 'title', 'body', 'image','excerpt'])->where('slug',$slug)->firstOrFail();

        return view('article-content')->with(['post' => $post]);
    }

}
