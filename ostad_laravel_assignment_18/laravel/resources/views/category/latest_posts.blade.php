<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Category with show posts</title>
</head>

<body>
    @foreach ($categories as $category)
        <h2>{{ $category->name }}</h2>
        <h5>Latest Post</h5>
        @if($category->posts->count() > 0)
            @foreach ($category->getLatestPost() as $post)
            <p>{{ $post->title }}</p>
            <p>{{ $post->content }}</p>
            <hr>
            @endforeach
        @else
            <p>No posts available on this category.</p>
        @endif
    @endforeach
</body>

</html>
