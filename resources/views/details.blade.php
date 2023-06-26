@extends('layouts.navBar')
@section('title', 'O sonho')
@section('navBar')
<aside class="mt-4 w-screen">
    <div class="flex flex-wrap justify-center gap-10 max-sm:gap-2">
            <div class="w-80 h-screen items-center">
                <div class="mt-2 mb-10" id="img">
                    <img src="{{ asset('storage/img/00_27_05-20_06_2023.jpg') }}" alt="Imagem do item">
                </div>
                <div class="space-y-5" id="information">
                    <div class="text-2xl" id="title">{{ $itens->title }}</div>
                    <div class="text-xl" id="desc">{{ $itens->description }}</div>
                    <div id="price">R$ {{ number_format($itens->price, 2, ',', '.') }}</div>
                    <div class="text-md"id="place-date">Localização: {{ $itens->place }}</div>
                    <div class="text-md"id="place-date">Data de publicação: {{ $itens->created_at->format('H:i - d/m/Y') }}</div>
                </div>
            </div>
        </div>
    </aside>
</body>

</html>
@endsection
