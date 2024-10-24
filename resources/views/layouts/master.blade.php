<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
    <script type="text/javascript" src="{{asset('js/bootstrap.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('./js/app.js') }}" type="module"></script>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        @vite('./resources/css/app.css')
        
</head>
<body>
    
  @vite('./resources/js/app.js')

    <div class="w-screen h-screen  flex divide-x overflow-hidden"> 
        
        @include('partials.navbar')
        <div class="mainPage w-full h-full  p-8 overflow-hidden ">
           @yield('searchbar')
            @yield('firstContent') 
        </div>
            @yield('secondContent')      
    </div>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/babel-core/5.8.24/browser.min.js"></script> -->
    <script src="{{ asset('/js/app.js') }}" type="module"></script>
    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js"></script>
    <script>
        lucide.createIcons();
    </script>
    <script src="{{ asset('js/app.js')}}" type="module"></script>
</body>
</html>
