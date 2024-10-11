<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>掲示板</title>
</head>
<body>
    <div class="container">
    <h1>
       <span> Hello Laravel！</span>
       <a href="">新規追加</a>
    </h1>
    <ul>
        @foreach ($posts as $post)
            <li>
                <a href="{{ route('text.posts', $post->id) }}">
                    {{ $post->title }}
                </a>
            </li>
        @endforeach
    </ul>
    </div>
</body>
</html>

