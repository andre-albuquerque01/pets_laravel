@extends('layouts.navBar')
@section('title', 'O sonho')
@section('navBar')
    <aside class="mt-4 w-screen">
        <section>
            <div class="flex flex-wrap justify-center gap-10 max-sm:gap-2 ">
                @foreach ($itens as $item)
                    <a href="{{ route('detail', $item->id_itens) }}">
                        <div class="flex border w-80 h-44  items-center">
                            <div class="w-60 p-5" id="img">
                                <img src="{{ asset('storage/img/00_27_05-20_06_2023.jpg') }}" alt="Imagem do item">
                            </div>
                            <div class="space-y-2" id="information">
                                <div class="text-2xl" id="title">{{ $item->title }}</div>
                                <div id="price">R$ {{ $item->price }}</div>
                                <div class="text-md"id="place-date">{{ $item->place }} - {{ $item->updated_at }}</div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </section>
    </aside>

    {{ $itens->links() }}
@endsection
