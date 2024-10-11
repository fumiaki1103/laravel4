<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    <title>{{ $post->title }}</title>
</head>
<body>
    <a href="{{ url('/') }}" class="re">戻る</a>
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->detail }}</p>
    <a href="{{ route('posts.edit', $post->id) }}">編集</a>
    <form action="{{ route('posts.destroy', $post->id) }}" method="post">
        @csrf
        @method('DELETE')
        <button>削除</button>
    </form>
</body>
</html>
