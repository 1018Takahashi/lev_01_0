@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <p>{{Auth::user()->name}}</p>
        <h1>Blog Name</h1>
        <p class = "create">[<a href='/posts/create'>create</a>]</p>
        <div class = 'posts'>
            @foreach ($posts as $line)
                <div class='post'>
                    <h2 class='title'>
                        <a href="/posts/{{ $line->id }}">{{ $line->title }}</a>
                    </h2>
                    <a href="/categories/{{ $line->category->id }}">{{ $line->category->name }}</a>
                </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
    </body>
</html>
@endsection

