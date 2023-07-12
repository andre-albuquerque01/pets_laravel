@extends('layouts.navBar')
@section('title', 'O sonho')
@section('navBar')
<aside class="mt-4 w-screen">
    <div class="flex flex-wrap justify-center gap-10 max-sm:gap-2">
            <div class="w-80 items-center">
                <div class="mt-2 mb-10" id="img">
                    {{-- <img src="{{ asset('storage/img/'.$itens->file_name ) }}" alt="Imagem do item"> --}}
                    <img src="{{ $itens->file_name }}" alt="Imagem do item" width="350" height="350">
                </div>
                <div class="space-y-5" id="information">
                    <div class="text-3xl text-center font-bold" id="title">{{ $itens->title }}</div>
                    <div class="text-md" id="desc">{{ $itens->description }}</div>
                    <div id="price">R$ {{ number_format($itens->price, 2, ',', '.') }}</div>
                    <div class="text-md" id="contact">Contato: {{ '('.$itens->user->ddd.')'.' '. $itens->user->number }}</div>
                    <div class="text-md" id="place">Localização: {{ $itens->place }}</div>
                    <div class="text-sm" id="date">Data de publicação: {{ $formatDate}}</div>
                </div>
            </div>
        </div>
    </aside>
</body>

</html>
@endsection
