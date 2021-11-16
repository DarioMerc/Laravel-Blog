<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Posts</title>
</head>
<body>
    <div style="width:700px;" class="container max-w-full mx-auto">
    @foreach($posts as $post)
    <div>
        <h2 class="text-xl font-bold text-red-500">{{$post->title}}</h2>
        <p class="text-md">{{$post->content}}</p>

    </div>
    @endforeach
    </div>
</body>
</html>