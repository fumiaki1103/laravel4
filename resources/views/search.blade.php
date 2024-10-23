<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    <title>掲示板 - 検索画面</title>
</head>
<body>
    <a href="{{ url('/') }}" class="re">戻る</a>
    <h1>検索画面</h1>
    <form action="{{ route('search.posts') }}" method="get">
        <label>
            検索キーワード
            <input type="text" name="keyword" value="{{ request('keyword') }}">
        </label>
        <div class="btn"><button>検索</button></div>
    </form>

    @if(!request('keyword'))
        <h2>検索結果を表示するにはキーワードを入力してください。</h2>
    @else
        <h2>検索結果</h2>
        <ul>
            @if($posts->isEmpty())
                <li>結果が見つかりませんでした。</li>
            @else
                @foreach ($posts as $post)
                    <li>
                        <a href="{{ route('posts.show', $post->id) }}">
                            {{ $post->title }}
                        </a>
                    </li>
                @endforeach
            @endif
        </ul>
    @endif
</body>
</html>
