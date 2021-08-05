@extends('layouts.app')

@section('content')

<div style=" position:relative; background-image:url('https://images.pexels.com/photos/5896686/pexels-photo-5896686.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940'); background-repeat:no-repeat; background-size:cover; height:680px; " class="grid-cols-1 m-auto">
    
    <div style="position:absolute; top:0; bottom:0; left:0; right:0; background-image: linear-gradient(rgba(0,0,0,0),rgba(0,0,0,1));"  class="flex text-gray-100 pt-20" >
        <div class="m-auto sm:m-auto w-4/5 block text-center">
            <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-15">
                Aprenda sobre tecnologia de maneira totalmente gratuita!!
            </h1>
            <a href="/blog" class="text-center bg-gray-800 text-black-900 py-2 px-4 font-bold text-xl uppercase px-5 rounded-3xl">
                Ler mais
            </a>
        </div>
    </div>
</div>

<div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200 ">

<div>
    <img style="margin-left:150px;" src="/images/bunch.png"
     width="300px"  alt="">
</div>

<div class="m-auto sm:m-auto text-left w-4/5 block ">

<h2 class="text-4xl font-extrabold text-gray-900">BLOG E-LEARNING</h2>

<!-- Primeiro paragrafo-->
<p class="py-8 text-gray-500 text-xl" style="margin-bottom:15px;">

 Chega de impedimentos, agora você pode aprender sobre tecnologia em qualquer lugar e hora através do EDUKA-TI o
 blog angolano de ensino e aprendizagem online.

</p>

<a href="/blog"  class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
    Saiba mais
</a>
</div>

</div>

<!-- Experiencias-->
<div class="text-center p-5 bg-black text-white">
 <div class="sm:grid grid-cols-3">

 <div>

    <div class=" flex flex-col items-center ">

        <div style="background-image:url('https://images.pexels.com/photos/160107/pexels-photo-160107.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940'); background-position:center;
         background-size:cover; background-repeat:no-repeat; position:relative;" class="rounded-full h-40 w-40">
                <div style="position:absolute; top:0; bottom:0; left:0; right:0; background-color:rgba(0,0,0,0.1);">

                </div>
        </div>
        <p style="margin-top:10px;">Programação</p>

    </div>

</div>


<div>

<div class=" flex flex-col items-center ">

<div style="background-image:url('/images/design-grafico.jpeg'); background-position:center;
         background-size:cover; background-repeat:no-repeat; position:relative;" class="rounded-full h-40 w-40">
                <div style="position:absolute; top:0; bottom:0; left:0; right:0; background-color:rgba(0,0,0,0.1);">

                </div>
        </div>

    <p style="margin-top:10px;">Design Gráfico</p>

</div>

</div>


<div>

<div class=" flex flex-col items-center ">


<div style="background-image:url('https://images.pexels.com/photos/6483583/pexels-photo-6483583.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940'); background-position:center;
         background-size:cover; background-repeat:no-repeat; position:relative;" class="rounded-full h-40 w-40">
                <div style="position:absolute; top:0; bottom:0; left:0; right:0; background-color:rgba(0,0,0,0.1);">

                </div>
        </div>

    <p style="margin-top:10px;">Marketing Digital</p>

</div>

</div>


 </div>


</div>

<!--Cards using Tailwind -->

    <section class="md:h-full flex items-center text-gray-600 ">

        <div class="container px-5 py-24 mx-auto">

        <div class="text-center mb-12 ">
        <h1 class="text-4xl md:text-4xl text-gray-700 font-semibold" style="margin-top:-60px;">
            POSTAGENS RECENTES
        </h1>

        </div>

        <div class="flex flex-wrap -m-4">


        @foreach($posts as $post)

            <div class="p-4 sm:w-1/2 lg:w-1/3 ">
                <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">

                <img src="{{ asset('images/'.$post->image_path) }}" 
                class="lg:h-72 md:h-48 w-full object-cover object-center">

                    <div class="p-6 hover:bg-indigo-700 hover:text-white transition duration-300 ease-in">
                            <h2 class="text-base font-medium text-indigo-300 mb-1">Publicado em {{ date('jS M Y',strtotime($post->updated_at))}}, By {{$post->user->name}} </h2>
                            <h1 class="text-2xl font-semibold mb-3">{{$post->title}}</h1>
                            <p class="leeading-relaxed mb-3">{{$post->description}}</p>

                        <div class="flex items-center flex-wrap">
                                <a href="" class="text-indigo-300 inline-flex items-center md:mb-2 lg:mb-0">Ler mais
                                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14">
                                        </path>
                                        <path d="M5 12h14">
                                        </path>
                                </svg>
                                </a>
                            
                                <span class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0
                                ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                                <svg class="w-4 h-4 mr-1" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8z ">
                                        </path>

                                        <circle cx="12" cy="12" r="3"> 

                                        </circle>
                                </svg>
                                </span>
                              
                                <span class="text-gray-400 inline-flex items-center leading-none text-sm">

                                <svg class="w-4 h-4 mr-1" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M21 11-5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0
                                        01-3.8-.9L3 21l1.9-5-7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.68.38
                                        8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z ">
                                        </path>
                                </svg>

                                </span>
                        </div>
                    </div>

                </div>
            </div>

        @endforeach
            
        

        </div>


        


        

        </div>

    </section>

@endsection
