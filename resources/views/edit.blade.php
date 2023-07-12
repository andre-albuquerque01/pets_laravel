@extends('layouts.navBar')
@section('title', 'Editar o produto')
@section('navBar')
    <div class="text-center mb-4 mt-8">
        <h1 class="text-2xl font-bold">Editar o produto</h1>
        <p class="text-gray-500">Preencha as informações abaixo:</p>
    </div>
    <div class="items-center justify-center m-2">
        <form class="max-w-lg mx-auto mt-8" method="POST" action="{{ route('editItens') }}"
            enctype="multipart/form-data">
            @csrf
            <div class="flex items-center justify-center">
                <label for="image"
                    class="cursor-pointer flex items-center justify-center w-44 h-44 border-2 border-gray-300 border-dashed rounded-md">
                    <input type="file" id="image" name="imagem" class="hidden" accept="image/*"
                        onchange="exibirImagem(event)" value="{{ asset('storage/img/' . $itens->file_name) }}" required>
                    <span class="text-gray-500 text-center">Clique para selecionar uma imagem</span>
                </label>
                <img id="imagem-preview" class="w-64 h-64 object-cover rounded-full hidden">
            </div>

            <div class="hidden">
                <input type="hidden" id="title" name="id_itens" value="{{ $itens->id_itens }}" required>
            </div>
            <div class="mb-4 mt-8">
                <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Título:</label>
                <input type="text" id="title" name="title"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none"
                    placeholder="Digite o título do produto" value="{{ $itens->title }}" minlength="3" maxlength="15" required>
            </div>
            <div class="mb-4 mt-8">
                <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Descrição:</label>
                <input type="text" id="description" name="description"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none"
                    placeholder="Digite a descrição do produto" value="{{ $itens->description }}" required>
            </div>
            <div class="mb-4 mt-8">
                <label for="price" class="block text-gray-700 text-sm font-bold mb-2">Preço:</label>
                <input type="number" step="0.01" id="price" name="price"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none"
                    placeholder="Digite a preço do produto" value="{{ $itens->price }}" required>
            </div>
            <div class="mb-4 mt-8">
                <label for="place" class="block text-gray-700 text-sm font-bold mb-2">Local do produto:</label>
                <input type="text" step="0.01" id="place" name="place"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none"
                    placeholder="Digite o local do produto" value="{{ $itens->place }}" required>
            </div>
            <div class="mb-4 mt-8">
                <label for="categoria" class="block text-gray-700 text-sm font-bold mb-2">Categoria:</label>
                <select class="w-full px-3 py-2 border bg-white border-gray-300 rounded-md shadow-sm focus:outline-none"
                    id="categoria" name="category" required>
                    <option value="" disabled selected>Selecione a categoria do produto</option>
                    @foreach ($categorysChoise as $categoria)
                        <option value="{{ $categoria->id_category }}" @if ($categoria->id_category == $itens->id_category) selected @endif>
                            {{ $categoria->description }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="text-center">
                <button type="submit"
                    class="px-4 py-2 bg-blue-600/100 text-white font-semibold rounded-md shadow-md hover:bg-sky-500/100">Salvar</button>
            </div>
        </form>
    </div>

@endsection
