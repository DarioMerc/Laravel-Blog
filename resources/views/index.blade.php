@extends('layouts.app')

@section('content')
<div class="">
    <div class="w-4/5 m-auto">
        <p class="text-center text-2xl py-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sodales diam eu lacus imperdiet, in rutrum massa fringilla. Nam rhoncus condimentum nunc non vehicula. Cras ac enim ipsum. Pellentesque fringilla iaculis leo, vestibulum fringilla augue maximus ac. Quisque vel nibh tempor, malesuada turpis eu, finibus orci. Phasellus at eleifend magna. Morbi eu enim sem. Aenean rutrum, tellus in cursus varius, ligula orci dictum risus, et lacinia dolor enim sed velit. Sed aliquam purus sed consectetur bibendum. Maecenas et sem dolor. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eleifend odio condimentum mattis cursus. Integer non lobortis augue. Vestibulum orci mauris, suscipit vel risus eu, luctus faucibus tellus. Nunc ut suscipit augue, vitae vestibulum velit. Etiam sit amet euismod lorem.</p>
    </div>
    <h1 class="text-center text-5xl">Recent Post</h1>
    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-500">
        <div>
            <img src="https://via.placeholder.com/150" alt="" class="object-fill">
        </div>
        <div>
            <h2 class="text-2xl py-3">Post Title</h2>
            <p class="text-1xl">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sodales diam eu lacus imperdiet, in rutrum massa fringilla. Nam rhoncus condimentum nunc non vehicula. Cras ac enim ipsum. Pellentesque fringilla iaculis leo, vestibulum fringilla augue maximus ac. Quisque vel nibh tempor, malesuada turpis eu, finibus orci. Phasellus at eleifend magna. Morbi eu enim sem. Aenean rutrum, tellus in cursus varius, ligula orci dictum risus, et lacinia dolor enim sed velit. Sed aliquam purus sed consectetur bibendum. Maecenas et sem dolor. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
        </div>
    </div>
</div>
@endsection