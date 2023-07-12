<!DOCTYPE html>
{{-- <html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> --}}
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>@yield('title')</title>
</head>

<body>
    <nav class="">
        <div class="grid grid-cols-2 items-center h-14 shadow-md">
            <div id="logo" class="justify-self-center mr-32 max-sm:justify-self-start max-sm:ml-4">
                <a href="{{ route('index') }}">Pets/logo</a>
            </div>
            <div id="nav" class="flex space-x-5 justify-self-center  max-sm:mr-4 max-sm:justify-self-end">
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
