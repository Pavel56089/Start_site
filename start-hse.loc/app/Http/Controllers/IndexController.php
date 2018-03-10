<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Article;


class IndexController extends Controller
{
    //
    public function index(){

        $articles = Article::select(['id', 'title', 'desc','img','date','category'])->get();


        return view('welcome')->with(['articles'=> $articles]);
    }

    public function show($id){

        $article = Article::select(['id', 'title', 'content'])->where('id',$id)->first();

        return view('article-content')->with(['article' => $article]);
    }

}
