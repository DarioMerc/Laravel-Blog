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
        <h1 class="text-2xl font-bold text-red-500">TODO LIST</h1>
        <a href="/posts/create" class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">Create</a>
        <hr/>
    @foreach($posts as $post)
    <div>
        <a href="/posts/{{$post->id}}/edit" class="text-xl font-bold text-red-500">{{$post->title}}</a>
        <p class="text-md">{{$post->content}}</p>
        <hr/>
    </div>
    @endforeach
    </div>
</body>
</html>