@extends('layouts.app')

@section('content')


<div class="w-4/5 m-auto text-center">
        <div class="py-15 border-b border-gray-200">
                <h1 class="text-6xl">
                    Editar publicação
                </h1>
        </div>
</div>

@if($errors->any())

<div class="w-4/5 m-auto">

    <ul>
        @foreach($errors->all() as $error)

        <li class="w-1/5 mb-4 text-gray-500 bg-red-700 rounded-2xl py-4">
        {{$error}};
        </li>

        @endforeach
    </ul>

</div>

@endif

<div class="w-4/5 m-auto pt-20">

    <form action="/blog/{{$post->slug}}" method="POST" enctype="multipart/form-data">

    @csrf
    @method('PUT')


    <input type="text" name="title" value="{{$post->title}}" class="bg-gray-0 block border-b-2 w-full h-20 text-4xl
    outline-none">

    <textarea name="description" placeholder="Description..."  id="" class="py-20 bg-gray-0 block border-b-2 w-full
    h-60 text-xl outline-none">{{$post->description}}</textarea>

    <div class="bg-grey-lighter pt-15 ">
    <label class="w-44 flex flex-col intems-center px-2 py-3 bg-white-rounded-lg shadow-lg tracking-wide uppercase 
        border-blue cursor-pointer">
    <span class="mt-2 text-base leading-normal">
        Select a image
    </span>

    <input type="file" name="image" class="hidden">

    </label>
    </div>

    <button type="submit" class="uppercase mt-15 bg-blue-500 text-gray-100 text-lg 
    font-extrabold py-4 px-8 rounded-3xl ">
        Publicar
    </button>

    </form>

</div>



@endsection
