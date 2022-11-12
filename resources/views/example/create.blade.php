<!-- create -->
@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif
<form action="/example/posts" method="POST">
    @csrf
    <input type="text" name="name" value="{{ old('name') }}">
    <input type="text" name="title" value="{{ old('title') }}">
    <input type="text" name="content" value="{{ old('content') }}">
    <input type="submit">
</form>

<p><a href="/example">TOPへ</a></p>