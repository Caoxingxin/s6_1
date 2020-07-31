@extends('layouts.app')

@section('content')
    <div class="container">
        <div id="title" style="text-align: center;">
            <h1>All Articles</h1>
        </div>
        <a href="{{url('admin/article/create/')}}" class="btn btn-primary">写文章</a>
        <hr>
        <div class="container">
            <div id="content" style="width: 90%; position: relative; float: left">
                <ul>
                    @foreach ($articles as $article)
                        <li style="margin-bottom: 50px">
                            <h4 class="title">
                                <a href="{{ url('admin/article/' . $article->id) }}">
                                    {{ $article->title }}
                                </a>
                            </h4>
                            <div class="content">
                                <p>{{ $article->content }}</p>
                            </div>

                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection

