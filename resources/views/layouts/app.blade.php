<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.tailwindcss.com"></script>

        <title>aplha - @yield('title')</title>

       
    </head>
    <body>

        <header class=" w-auto h-14 mb-7 drop-shadow-lg">
            <nav class="w-4/5 mx-auto flex justify-between items-center">
                <div class="py-4">
                    <li class="list-none inline-flex">ALPHA</li><a href="/"></a>
                </div>
                <div>
                    <a href="">
                        <li class="list-none inline-flex">Iniciar sesion</li>
                    </a>
                    <a href="{{ route('register') }}">
                        <li class="list-none inline-flex">Registro</li>
                    </a>
                </div>
            </nav>
        </header>

        @yield('content')

    </body>
</html>
