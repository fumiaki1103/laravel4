<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    <title>掲示板</title>
</head>
<body>
        <a href="{{ route('text.posts', $post->id) }}" class="re">戻る</a>
        <h1>編集</h1>
        <form action="{{ route('posts.update', $post->id) }}" method="post">
            @csrf
            <!-- @method('PATCH') は削除 -->

            <label>
                Title
                <input type="text" name="title" value="{{ old('title', $post->title) }}">
            </label>
            @error('title')
            <div class="error">{{ $message }}</div>
            @enderror

            <label>
                Detail
                <textarea name="detail" rows="10">{{ old('detail', $post->detail) }}</textarea>
            </label>
            @error('detail')
            <div class="error">{{ $message }}</div>
            @enderror

            <div class="btn"><button>編集</button></div>
        </form>
</body>
</html>
