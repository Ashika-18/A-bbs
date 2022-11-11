<!-- edit -->
@if ($errors->any())
    <ul>
        @foreach ($errors as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif
<form action="{{ url('/example', $post->id) }}" mehtod="POST">
    @method("PUT")
    @csrf
    <input type="text" name="name" value="{{ old('name') == '' ? $post->name : old('name') }}">
    <input type="text" name="title" value="{{ old('title') == '' ? $post->title : old('title') }}">
    <input type="text" name="content" value="{{ old('content') == '' ? $post->content : old('content') }}">
    <input type="submit">
</form>

<p><a href="/example">TOPへ</a></p>