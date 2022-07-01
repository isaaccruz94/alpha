<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.tailwindcss.com"></script>

        <title>aplha - @yield('title')</title>

       
    </head>
    <body>

        <header>
            <nav>
                <div>
                    <li>ALPHA</li>
                </div>
                <div>
                    <li>Iniciar sesion</li>
                    <li>Registro</li>
                </div>
            </nav>
        </header>

        @yield('content')

    </body>
</html>
