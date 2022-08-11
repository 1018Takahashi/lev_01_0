<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Blog Name</h1>
        <p class = "create">[<a href='/posts/create'>create</a>]</p>
        <div class = 'posts'>
            @foreach ($posts as $line)
                <div class='post'>
                    <h2 class='title'>
                        <a href="/posts/{{ $line->id }}">{{ $line->title }}</a>
                    </h2>
                    <a href="/categories/{{ $line->category->id }}">{{ $line->category->name }}</a>
                    <p class = "body">{{ $line->body }}</p>
                    <form action="/posts/{{ $line->id }}" id="form_delete" method="post" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type = "button" onclick = "return deletePost(this)">delete</button> 
                    </form>
                </div>
            @endforeach
        </div>
        <div class="footer">
            <a href="/">back</a>
        </div>
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
        <script>
            function deletePost(e){
                'use strict';
                if(confirm("削除すると復元できません。\n本当に削除しますか？")){
                    document.getElementById("form_delete").submit();
                }
            }
        </script>
    </body>
</html>