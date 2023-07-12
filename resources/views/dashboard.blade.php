<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Dashboard</title>
</head>

<body>
    <nav class="">
        <div class="grid grid-cols-2 items-center h-14 shadow-md">
            <div id="logo" class="justify-self-center mr-32 max-sm:justify-self-start max-sm:ml-4">
                <a href="{{ route('index') }}">O sonho</a>
            </div>
            <div id="nav" class="flex space-x-5 justify-self-center  max-sm:mr-4 max-sm:justify-self-end">
                <a href="{{ route('cadastro') }}" class="">Anunciar</a>
                @auth
                    <a href="{{ route('profile.edit') }}">Perfil</a>
                @else
                    <a href="{{ route('dashboard') }}">Entrar</a>
                @endauth
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        Sair
                    </a>
                </form>
            </div>
        </div>
    </nav>
    <section>
        <div class="py-5">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white">
                    <div class="px-6 text-gray-900">
                        Seus anúncios
                    </div>
                </div>
            </div>
        </div>
    </section>

    @foreach ($user as $users)
        <section class="flex items-start justify-center max-sm:w-screen">
            <div class="flex flex-col md:flex-row border items-center w-9/12 max-w-lg mx-auto my-4">
                <div class="w-full md:w-60 p-3" id="img">
                    <a href="{{ route('detail', $users->id_itens) }}">
                        <img src="{{ $users->file_name }}" alt="Imagem do item" width="150" height="150">
                </div>
                <div class="flex flex-col justify-center space-y-2 px-5" id="information">
                    <div class="text-2xl" id="title">{{ Str::limit($users->title, 10) }}</div>
                    <div id="price">R$ {{ number_format($users->price, 2, ',', '.') }}</div>
                </div>
                </a>
                @php
                    $id_itens = base64_encode($users->id_itens);
                @endphp
                <div class="flex flex-wrap mt-4 xl:ml-10">
                    <div class="text-xs max-xl:ml-5" id="edit">
                        <a href="{{ route('edit', $id_itens) }}">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                            </svg>
                        </a>
                    </div>

                    <div class="text-xs max-xl:ml-5" id="delete">
                        <a href="{{ route('deleteIten', $id_itens) }}">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    @endforeach
    <section>
        <div class="flex justify-center mt-10 mb-10 xl:mt-16 xl:mb-16">
            {{ $user->links() }}
        </div>
    </section>
</body>

</html>
