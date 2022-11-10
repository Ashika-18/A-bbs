<!-- create -->
@if ($errors->any())
    <ul>
        @foreach ($errors as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif
<form action="/example/posts" method="POST">
    @csrf
    <input type="text" name="name" value="{{ old('name') }}">
    <input type="text" name="title" value="{{ old('title') }}">
    <input type="text" name="content" value="{{ ('content') }}">
    <input type="submit">
</form>