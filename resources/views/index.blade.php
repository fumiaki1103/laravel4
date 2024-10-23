<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    <title>掲示板</title>
</head>
<body>
    <div class="container">
    <h1>
       <span> Hello Laravel！</span>
            <div class="btn1">
                <a href="{{ route('posts.create') }}">新規追加</a>
            </div>
                <div class="btn2"><a href="{{ route('search.posts') }}">検索</a> </div>
    </h1>
    <ul>
        @foreach ($posts as $post)
            <li>
                <a href="{{ route('posts.show', $post->id) }}">
                    {{ $post->title }}
                </a>
            </li>
        @endforeach
    </ul>
    </div>
</body>
</html>

