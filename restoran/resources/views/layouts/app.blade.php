<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <script src="https://kit.fontawesome.com/52b722e740.js" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite('resources/css/app.css')

    
</head>
<body>
    <div class="w-full px-[50px] flex justify-between items-center h-[100px] bg-red-600 text-white ">
        <div class="">
            <a href="/" class="text-5xl font-bold">Restoran</a>
        </div>
        @guest
            
         <div class="flex text-2xl font-bold gap-4 items-center">
            <a href="/">Home</a>
            <a href="/">About</a>
            <a href="/">Contact</a>
            <a href="/login">Login</a>    
            <a href="/register">Register</a>    

        </div>
        @else 
        <div class="flex font-bold gap-[30px] text-2xl">
            <div class="">
                <a href="/">Home</a>
                <a href="/">About</a>
                <a href="/">Contact</a>
                <button onclick="document.getElementById('logout').submit();" class="text-2xl">Logout</button>

                <form id="logout" action="{{route("logout")}}" method="POST">
                @csrf
                </form>

            </div>
        </div>   
        @endguest

     
    </div>
  @yield('content')
</body>
</html>
