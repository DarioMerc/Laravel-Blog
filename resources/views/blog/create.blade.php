@extends('layouts.app')

@section('content')
    <div class="w-4/5 m-auto text-left">
        <div class="py-15 border-b border-blue-200">
            <h1 class="text-6xl">
                Create Post
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
        <form action="/blog" method="POST" enctype="multipart/form-data">
            @csrf
            <input 
            type="text"
            name="title"
            placeholder="Title..."
            class="bg-transparent block border-2 w-full h-15 text-3xl outline-none">

            <textarea 
                name="content"
                placeholder="Content..."
                class="bg-transparent block my-5 border-2 w-full h-20 text-xl outline-none"></textarea>

            <div class="bg-grey-lighter pt-5">
                <label class="w-2/5 flex flex-col items-center px-2 py-3 bg-white-rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer">
                    <span class="text-base leading-normal">
                        Image Upload:
                    </span>
                    <input 
                    type="file"
                    name="image"
                    class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none">
                </label>
            </div>

            <button    
                type="submit"
                class="uppercase mt-15 bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
                Submit Post
            </button>
        </form>
    </div>
@endsection