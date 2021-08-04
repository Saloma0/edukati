<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'EDUKA-TI') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
   
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet"/>

 


  </head>
<body class="bg-white h-screen antialiased leading-none font-sans">
    <div id="app">
        <!-- Header -->
        <header class="bg-gray-800 py-6">
            <div class="container mx-auto flex justify-between items-center px-6">
                <div>
                    <a href="{{ url('/') }}" class="text-lg font-semibold text-gray-100 no-underline">
                        {{ config('app.name', 'EDUKA-TI') }}
                    </a>
                </div>

            
                <!-- NAVBAR -->
                <nav class="space-x-4 text-gray-300 text-sm sm:text-base">
                

                @if(Auth::check())

           <a href="/home" class="bg-green-500 uppercase bg-transparent text-gray-100 text-xs
            font-extrabold py-3 px-5 rounded-3xl m-5">
            Dashboard
              </a>
       

                @endif


                <a class="no-underline hover:underline" href="/">Home</a>
                    
                @guest
                        <a class="no-underline hover:underline" href="{{ route('login') }}">{{ __('Login') }}</a>
                        @if (Route::has('register'))
                            <a class="no-underline hover:underline" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                    @else
                        <span>{{ Auth::user()->name }}</span>

                        <a href="{{ route('logout') }}"
                           class="no-underline hover:underline"
                           onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            {{ csrf_field() }}
                        </form>
                    @endguest
                </nav>
            </div>
        </header>


        <!--Nesta zona contem todo o conteudo do blog -->
        <div>
        @yield('content')
        </div>

        <!--Nesta zona contem o footer de todas paginas do site-->
        <div>
            @include('layouts.footer')
        </div>
    </div>
</body>
</html>
