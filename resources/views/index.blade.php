@extends('layouts.navBar')
@section('title', 'Pets')
@section('navBar')

    <aside class="mt-4 w-screen">
        <section>
            <div class="flex flex-wrap justify-center gap-10 max-sm:gap-2 ">
                <div class="flex border w-80 h-44  items-center">
                    <div class="shrink h-14 p-5" id="img">
                        <img src="{{ asset('img/itenTest.jpg') }}" alt="Image on the iten">
                    </div>
                    <div class="space-y-2" id="information">
                        <div class="text-2xl" id="title">Brasil</div>
                        <div id="price">R$ 12</div>
                        <div class="text-md"id="place-date">BSB - 12/12/2023</div>
                    </div>
                </div>
                <div class="flex border w-80 h-44  items-center">
                    <div class="shrink h-14 p-5" id="img">
                        <img src="{{ asset('img/itenTest.jpg') }}" alt="Image on the iten">
                    </div>
                    <div class="space-y-2" id="information">
                        <div class="text-2xl" id="title">Brasil</div>
                        <div id="price">R$ 12</div>
                        <div class="text-md"id="place-date">BSB - 12/12/2023</div>
                    </div>
                </div>
                <div class="flex border w-80 h-44  items-center">
                    <div class="shrink h-14 p-5" id="img">
                        <img src="{{ asset('img/itenTest.jpg') }}" alt="Image on the iten">
                    </div>
                    <div class="space-y-2" id="information">
                        <div class="text-2xl" id="title">Brasil</div>
                        <div id="price">R$ 12</div>
                        <div class="text-md"id="place-date">BSB - 12/12/2023</div>
                    </div>
                </div>
            </div>
        </section>
    </aside>
@endsection