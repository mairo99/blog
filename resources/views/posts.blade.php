<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My blog</title>
    <link rel="stylesheet" href="/app.css">
</head>
<body>

@foreach ($posts as $post)
    <article>

        <a href="/posts/{{$post->slug}}"><h1>
            {{$post->title}}

        </a>
        </h1>

        <div>

            {{$post->excerpt}}

        </div>

    </article>
@endforeach
</body>
</html>
