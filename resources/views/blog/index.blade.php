@extends('layouts.app')

@section('content')
    <div class="w-4/5 m-auto text-center">
        <div class="py-15 border-b border-blue-200">
            <h1 class="text-6xl">
                Blog Posts
            </h1>
        </div>
    </div>

    @if (session()->has('message'))
        <div class="w-4/5 m-auto mt-10 pl-2">
            <p class="w-2/6 mb-4 text-green-500 rounded-2xl py-4">{{session()->get('message')}}</p>
        </div>
    @endif

    @if (Auth::check())
        <div class="pt-15 w-4/5 m-auto">
            <a href="/blog/create" class="bg-blue-500 uppercase bg-transparent text-gray-100 text-xs font-extrabold py-3 px-3 rounded-3xl px">
            Create post
            </a>
        </div>
    @endif
    @foreach ($posts as $post)
        <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-blue-200">
            <div>
                <img src="{{ asset('images/' . $post->image_path) }}" alt="">
            </div>
            <div>
                <h2 class="text-blue-700 font-bold text-2xl pb-4">{{$post->title}}</h2>
                <span>Created on {{ date('jS M Y', strtotime($post->updated_at)) }}</span>
                <p class="text-blue-700 pt-8 pb-10 leading-8 font-light">{{$post->content}}</p>
                <a href="/blog/{{$post->slug}}" class="uppercase bg-blue-500 hover:bg-blue-700 text-gray-100 font-extrabold py-2 px-4 rounded-3xl">Keep Reading</a>
                @if (isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
                <span class="float-right">
                    <a href="/blog/{{$post->slug}}/edit" class="text-blue-700 italic hover:text-blue-900">
                        Edit
                    </a>
                </span>
                <span class="float-right">
                    <form action="/blog/{{$post->slug}}" method="POST"> 
                        @csrf
                        @method('delete')
                        <button class="text-red-500 pr-3" type="submit">
                            Delete
                        </button>
                    </form>
                </span>
                @endif
            </div>
        </div>
    @endforeach
@endsection