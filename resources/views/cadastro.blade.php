@extends('layout.navBar')
@section('title', 'Cadastro do produto')
@section('navBar')
    <div class="text-center mb-4 mt-8">
        <h1 class="text-2xl font-bold">Cadastro do produto</h1>
        <p class="text-gray-500">Preencha as informações abaixo:</p>
    </div>

    <div class="items-center justify-center m-2">
        <form class="max-w-lg mx-auto mt-8">
            <div class="flex items-center justify-center">
                <label for="imagem"
                    class="cursor-pointer flex items-center justify-center w-64 h-64 border-2 border-gray-300 border-dashed rounded-md">
                    <input type="file" id="imagem" name="imagem" class="hidden" accept="image/*"
                        onchange="exibirImagem(event)">
                    <span class="text-gray-500">Clique para selecionar uma imagem</span>
                </label>
                <img id="imagem-preview" class="w-64 h-64 object-cover rounded-full hidden">
            </div>

            <div class="mb-4 mt-8">
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Nome:</label>
                <input type="text" id="name" name="name"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none"
                    placeholder="Digite seu nome">
            </div>
            <div class="mb-4 mt-8">
                <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Descrição:</label>
                <input type="text" id="description" name="description"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none"
                    placeholder="Digite a descrição do produto">
            </div>
            <div class="mb-4 mt-8">
                <label for="price" class="block text-gray-700 text-sm font-bold mb-2">Preço:</label>
                <input type="number" step="0.01" id="price" name="price"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none"
                    placeholder="Digite a preço do produto">
            </div>
            <div class="mb-4 mt-8">
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Categoria:</label>
                <select
                    class="w-full px-3 py-2 border bg-white border-gray-300 rounded-md shadow-sm focus:outline-none">
                    <option value="" disabled selected>Selecione uma categoria</option>
                    <option value="opcao1">Opção 1</option>
                    <option value="opcao2">Opção 2</option>
                    <option value="opcao3">Opção 3</option>
                </select>
            </div>

            <div class="text-center">
                <button type="submit"
                    class="px-4 py-2 bg-blue-600/100 text-white font-semibold rounded-md shadow-md hover:bg-sky-500/100">Cadastrar</button>
            </div>
        </form>
    </div>
    <script src="{{ asset('js/script.js') }}"></script>
@endsection
