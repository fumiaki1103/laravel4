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
       <a href="{{ route('posts.create') }}">新規追加</a> <!-- 修正 -->
       <div class="btn1"><a href="{{ route('search.posts') }}">検索</a></div> <!-- 修正 -->
    </h1>
    <ul>
        @foreach ($posts as $post)
            <li>
                <a href="{{ route('posts.show', $post->id) }}"> <!-- 修正 -->
                    {{ $post->title }}
                </a>
            </li>
        @endforeach
    </ul>
    </div>
</body>
</html>

