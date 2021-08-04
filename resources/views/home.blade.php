@extends('layouts.app')

@section('content')
<main class="sm:container sm:mx-auto sm:mt-10">
    <div class="w-full sm:px-6">

        @if (session('status'))
            <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">

            <header class="font-semibold bg-gray-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                Dashboard
            </header>

            <div class="w-full p-6">
            <div class="pt-15 w-4/5 m-auto">
                  <a href="/blog/create" class="bg-blue-500 uppercase bg-transparent text-gray-100 text-xs
                         font-extrabold py-3 px-5 rounded-3xl">
                         Criar publicacao
                     </a>
            </div>

 @foreach($posts as $post)


<div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200 ">
 
<div>
    <img src="{{ asset('images/'.$post->image_path) }}" width="600" alt="" >
</div>

    <div >
        <h2 class="text-gray-700 font-bold text-5xl pb-4">{{$post->title}}</h2>

    <span class="text-gray-500">
        By <span class="font-bold italic text-gray-800"> {{$post->user->name}}</span>, Publicado em {{ date('jS M Y',strtotime($post->updated_at))}}
    </span>

    <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
    {{$post->description}}</p>

    <a href="/blog/{{$post->slug}}" class="uppercase bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">Continuar a ler</a>

    @if(isset(Auth::user()->id) && Auth::user()->id== $post->user_id)

    <span class="float-right">
        <form action="/blog/{{$post->slug}}" method="POST">
        @csrf
        @method('delete')

        <button class="text-red-500 pr-3 px-5 rounded-3xl italic hover:text-gray-900
    pb-1 border-b-2 mx-4" type="submit">
            Remover
        </button>

        </form>
    </span>

    
    <span class="float-right">

    <a href="/blog/{{$post->slug}}/edit" class="px-5 rounded-3xl text-gray-600 italic hover:text-gray-900
    pb-1 border-b-2">
        Editar
    </a>

    </span>
    @endif

    </div>
</div>


@endforeach


            </div>
        </section>
    </div>
</main>
@endsection
