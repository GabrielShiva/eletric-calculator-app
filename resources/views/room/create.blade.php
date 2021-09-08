@extends('layouts.app')

@section('title', 'NIKO - Novo Cômodo')

@section('content')
<div class="mt-10 ml-80 mr-80">
    <div class="bg-white py-8 px-6 shadow-md rounded-lg mw">

        <div class="px-36">
            <h2 class="text-gray-700 text-5xl font-semibold">Novo Cômodo</h2>
        </div>

        <form action="{{ route('room.store', ['id' => $project->id]) }}" method="POST" class="mb-0 space-y-6">
            @csrf
            <div>
                <div class="mt-4">
                    <label class="block">
                        <span class="text-gray-700">Nome do Cômodo</span>
                        <input type="text" name="name" class="w-full border-2 border-gray-300 px-3 py-2 rounded-lg focus:outline-none focus:border-green-300" required placeholder="EX.: Sala de Estar" />
                    </label>
                </div>

                <div class="mt-4">
                    <label class="block">
                        <span class="text-gray-700">Comprimento</span>
                        <input type="number" step="any" name="length" class="w-full border-2 border-gray-300 px-3 py-2 rounded-lg focus:outline-none focus:border-green-300" required placeholder="EX.: 3.5" />
                    </label>
                </div>

                <div class="mt-4">
                    <label class="block">
                        <span class="text-gray-700">Largura</span>
                        <input type="number" step="any" name="width" class="w-full border-2 border-gray-300 px-3 py-2 rounded-lg focus:outline-none focus:border-green-300" required placeholder="EX.: 2.8" />
                    </label>
                </div>

                <div class="p-6 ml-56">
                    <button type="submit" class="shadow ite bg-green-500 hover:bg-green-400 focus:shadow-outline transition-shadow duration-100 focus:outline-none text-white font-bold py-2 px-4 rounded" type="button">
                        Criar Cômodo
                    </button>
                </div>
            </div>
        </form>

    </div>
</div>
@endsection
