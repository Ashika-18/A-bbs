<form action="/example/posts" method="POST">
    @csrf
    <input type="text" name="name">
    <input type="text" name="title">
    <input type="text" name="content">
    <input type="submit">
</form>