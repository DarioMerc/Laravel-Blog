@extends('layouts.app')

@section('content')
<div class="">
    <h2 class="text-4xl font-bold py-10 text-center">
        Welcome to my blog
    </h2>
    <div class="w-4/5 m-auto">
        <p class="text-center text-2xl py-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sodales diam eu lacus imperdiet, in rutrum massa fringilla. Nam rhoncus condimentum nunc non vehicula. Cras ac enim ipsum. Pellentesque fringilla iaculis leo, vestibulum fringilla augue maximus ac. Quisque vel nibh tempor, malesuada turpis eu, finibus orci. Phasellus at eleifend magna. Morbi eu enim sem. Aenean rutrum, tellus in cursus varius, ligula orci dictum risus, et lacinia dolor enim sed velit. Sed aliquam purus sed consectetur bibendum. Maecenas et sem dolor. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eleifend odio condimentum mattis cursus. Integer non lobortis augue. Vestibulum orci mauris, suscipit vel risus eu, luctus faucibus tellus. Nunc ut suscipit augue, vitae vestibulum velit. Etiam sit amet euismod lorem.</p>
    </div>
    <hr/>
    <div class="text-center py-10">
        <h2 class="text-4xl font-bold py-5">
            Recent Posts
        </h2>
    </div>

    <div class="sm:grid grid-cols-2 w-4/5 m-auto">
        <div class="flex bg-yellow-700 text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="uppercase text-xs">
                    Title
                </span>

                <h3 class="text-xl font-bold py-10">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas necessitatibus dolorum error culpa laboriosam. Enim voluptas earum repudiandae consequuntur ad? Expedita labore aspernatur facilis quasi ex? Nemo hic placeat et?
                </h3>

                <a 
                    href=""
                    class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                    Read More
                </a>
            </div>
        </div>
</div>
@endsection