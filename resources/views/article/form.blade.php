@extends('layouts.app')
@section('content')
    <div class="container">
        <div id="title" style="text-align: center">
            <h1>Create</h1>
        </div>
        <hr>
        <div class="container">
            <form action="{{ url('/admin/article') }}" method="post">
                @csrf
                <input type="text" name="title" class="form-control" required placeholder="请输入标题" value="{{ isset($article) ? $article->title : ''}}">
                <br>
                <textarea name="content" rows="10" required placeholder="请输入内容">
                    {{isset($article) ? $article->conent : ''}}
                </textarea>
                <button class="btn btn-lg btn-info">{{$btnName}}</button>
            </form>
        </div>
    </div>
@endsection
