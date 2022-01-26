@extends('layouts.app')

@section('content')
    <div class="w-4/5 m-auto text-left">
        <div class="py-15 border-b border-blue-200">
            <h1 class="text-6xl">
                Edit Post
            </h1>
        </div>
    </div>

    @if ($errors->any())
        <div class="w-4/5 m-auto">
            <ul>
                @foreach ($errors->all() as $error)
                    <li class="w-1/5 mb-4 text-red-500 rounded-2xl py-4 px-4">
                        {{$error}}
                    </li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="w-4/5 m-auto pt-10">
        <form action="/blog/{{$post->slug}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <input 
            type="text"
            name="title"
            value={{$post->title}}
            class="bg-transparent block border-2 w-full h-15 text-3xl outline-none">

            <textarea 
                name="content"
                class="bg-transparent block my-5 border-2 w-full h-20 text-xl outline-none">{{$post->content}}</textarea>

            <button    
                type="submit"
                class="uppercase mt-15 bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
                Submit Post
            </button>
        </form>
    </div>
@endsection