<?php

namespace App\Http\Controllers;

use App\Article;     // 引用Article模型

class ArticleController extends Controller
{
    public function index()
    {
        return view('home')->with('articles', Article::all());

    }
    public function list()
    {
        return view('home')->with('articles', Article::all());

    }
}
