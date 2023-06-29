@extends('layouts.navBar')
@section('title', 'O sonho')
@section('navBar')
    <aside class="mt-4">
        <section>
            <div class="flex flex-wrap justify-center gap-10 max-sm:gap-2 xl:mr-40 xl:ml-40">
                @foreach ($itens as $item)
                    <a href="{{ route('detail', $item->id_itens) }}" class="max-sm:w-screen">
                        <div class="flex border xl:w-96 md:h-54 items-center">
                            <div class="xl:w-60 p-3" id="img">
                                {{-- <img src="{{ asset('storage/img/' . $item->file_name)}}" alt="Imagem do item" width="200" --}}
                                <img src="{{ $item->file_name }}" alt="Imagem do item" width="150" height="150">
                            </div>
                            <div class="space-y-2 px-5" id="information">
                                <div class="text-2xl" id="title">{{ $item->title }}</div>
                                <div id="price">R$ {{ number_format($item->price, 2, ',', '.') }}</div>
                                <div class="text-md"id="place">{{ $item->place }}</div>
                                <div class="text-xs"id="date"> {{ $item->updated_at }}</div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </section>
    </aside>
    <section>
        <div class="flex justify-center mt-10 mb-10 xl:mt-16 xl:mb-16">
            {{ $itens->links() }}
        </div>
    </section>
@endsection
