<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel=""stylesheet href="{{ asset('css/style.css') }}">
    <title>－皆の掲示板－</title>
</head>
<body>
    <h1>－皆の掲示板－</h1>

    @foreach($posts as $post)
        <p><a href="{{ url('/example', $post->id) }}">{{ $post->title }}</a>
        <a href="{{ url('/example', [$post->id, 'edit']) }}"></a>更新</p>
    <form action="{{ url('/example', $post->id) }}" method="POST" onsubmit="if(confirm('削除しても良いですか？')) {return true} else {return false};">
        @method("delete")
        @csrf
        <button type="submit">削除</button>
    </form>

    @endforeach

    <a href="{{ secure_url('/example/create') }}">投稿</a>
</body>
</html>