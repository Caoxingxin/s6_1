@extends('layouts.app');

@section('content');
<div class="container">
    <div id="title" style="text-align: center;">
        <h1>{{ $article->title }}</h1>
    </div>
    <p>创建于: {{ $article->created_at }}</p>
    <hr>
    <div class="content">
        <article>{{ $article->content }}</article>
    </div>
</div>

@endsection
