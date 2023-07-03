<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head?>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

</head>
<body>

@foreach ($posts as $post)
    <h2>{{ $post->title }}</h2>
    <p>{{ $post->content }}</p>
    <p>Category: {{ $post->category->name }}</p>
    <hr>
@endforeach

@foreach ($categories as $category)
    <h2>{{ $category->name }}</h2>
    @if ($category->posts->count() > 0)
        <p>Latest Post: {{ $category->latestPost()->title }}</p>
        <p>{{ $category->latestPost()->content }}</p>
    @else
        <p>No posts found for this category.</p>
    @endif
    <hr>
@endforeach



</body>
</html>
