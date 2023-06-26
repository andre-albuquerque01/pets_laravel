<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>@yield('title')</title>
</head>

<body>
    <nav>
        <div class="grid w-screen grid-cols-2 items-center h-14 border border-b-black">
            <div id="logo" class="justify-self-center max-sm:justify-self-start max-sm:ml-4">
                <a href="{{ route('index') }}">Pets/logo</a>
            </div>
            <div id="nav" class="flex space-x-5 justify-self-center mr-12 max-sm:mr-4 max-sm:justify-self-end">
                <a href="{{ route('cadastro') }}" class="">Anunciar</a>
                @auth
                    <a href="{{ route('dashboard') }}">Perfil</a>
                @else
                    <a href="{{ route('dashboard') }}">Entrar</a>
                @endauth
            </div>
        </div>
    </nav>
    @yield('navBar')
</body>

</html>
