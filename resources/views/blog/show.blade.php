@extends('layouts.app')

@section('content')
    <div class="w-4/5 m-auto text-left">
        <div class="py-15 border-b border-blue-200">
            <h1 class="text-6xl">
                {{$post->title}}
            </h1>
        </div>
        <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
            {{$post->content}}
        </p>
    </div>
@endsection