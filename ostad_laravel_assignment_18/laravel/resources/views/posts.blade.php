<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>posts</title>
</head>

<body>
    @foreach ($posts as $post)
    <h2>{{ $post->title }}</h2>
    <p>Category: {{ $post->category->name }}</p>
    <p>{{ $post->content }}</p>
    <hr>
    @endforeach
</body>

</html>
