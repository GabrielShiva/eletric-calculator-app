@extends('layouts.app')

@section('title', 'NIKO - Novo Projeto')

@section('content')
<div class="mt-10 ml-80 mr-80">
    <div class="bg-white py-8 px-6 shadow-md rounded-lg mw">

        <div class="px-44">
            <h2 class="text-gray-700 text-5xl font-semibold">Novo Projeto</h2>
        </div>

        <form action="{{ route('project.store') }}" method="POST" class="mb-0 space-y-6">
            @csrf
            <div>
                <div class="mt-4">
                    <label class="block">
                        <span class="text-gray-700">Titulo do Projeto</span>
                        <input type="text" name="title" class="w-full border-2 border-gray-300 px-3 py-2 rounded-lg focus:outline-none focus:border-green-300" required placeholder="EX.: Projeto Elétrico" />
                    </label>
                </div>

                <div class="mt-4">
                    <label class="block">
                        <span class="text-gray-700">Descrição</span>
                        <textarea name="description" class="form-textarea mt-1 border-2 border-gray-300 rounded-lg focus:outline-none focus:border-green-300 p-4 block w-full" rows="3" placeholder="Descreva o projeto aqui..." required></textarea>
                    </label>
                </div>

                <div class="p-6 ml-56">
                    <button type="submit" class="shadow ite bg-green-500 hover:bg-green-400 focus:shadow-outline transition-shadow duration-100 focus:outline-none text-white font-bold py-2 px-4 rounded" type="button">
                        Criar Projeto
                    </button>
                </div>
            </div>
        </form>

    </div>
</div>
@endsection
