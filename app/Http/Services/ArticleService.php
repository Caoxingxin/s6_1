<?php

namespace App\Http\Services;

use App\Article;

class ArticleService
{
    public function list()
    {
        return Article::orderByDesc('updated_at')->get(); //orderByDesc('id') 将文章倒序排列显示
    }
    public function find($id)
    {
        return Article::find($id);
    }
    public function create($data){
        return Article::create($data);
    }
}
