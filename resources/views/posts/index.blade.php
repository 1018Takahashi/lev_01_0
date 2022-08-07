<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

        <title>blog</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        
    </head>
    <body>
        <h1>Blog Name</h1>
        <div class = 'posts'>
            @foreach ($posts as $line)
                <div class='post'>
                    <h2 class='title'>
                　　　　　　<a href="/posts/{{ $line->id }}">{{ $line->title }}</a>
                　　</h2>
                </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
    </body>
</html>
