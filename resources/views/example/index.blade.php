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
    <a href="{{ secure_url('/example/create') }}">投稿</a>
</body>
</html>