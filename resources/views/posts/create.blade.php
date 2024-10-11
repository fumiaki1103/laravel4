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
        <a href="{{ url('/') }}" class="re">戻る</a>
        <h1>新規追加</h1>
        <form action="{{ route('posts.store') }}" method="post">
            @csrf

            <label>
                Title
                <input type="text" name="title" value="{{ old('title')}}">
            </label>
            @error('title')
            <div class= class="error">{{ $message }}</div>
            @enderror
            <label>
                Detail
                <textarea name="detail" rows="10"></textarea>
            </label>
            @error('detail')
            <div class= class="error">{{ $message }}</div>
            @enderror
            <div class="btn"><button>新規追加</button></div>
        </form>
</body>
</html>


