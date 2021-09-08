@extends('layouts.app')

@section('title', 'NIKO - ' . $project->title)

@section('content')
<div class="p-12">    
    <header class="flex">
        <h2 class="text-gray-700 text-5xl font-semibold">{{ $project->title }}</h2>
        <a href="{{ route('room.create', ['id' => $project->id]) }}"class="font-medium text-lg ml-6 bg-green-500 p-2 rounded-lg text-white hover:bg-green-400 transition-shadow duration-100">
            Criar Cômodo
        </a>
    </header>

    <div class="mt-12 flex flex-wrap grid grid-cols-4 gap-x-6 gap-y-1">
        @foreach ($project->rooms as $room)

            <div class="mt-6 bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-100">
                <div class="p-6">
                    <span class="text-2xl text-gray-700 capitalize font-medium">{{ $room->name }}</span>
                    <div class="p-6 bg-gray-200 rounded-lg">
                        <div class="border-b border-gray-300 py-2"><span class="font-medium">Área:</span> {{ $room->area }}m²</div>
                        <div class="block py-2"><span class="font-medium">Perímetro:</span> {{ $room->perimeter }}m</div>
                    </div>
                    <div class="mt-2 flex justify-between">
                        <a href="#" class="flex">
                            <svg class="w-8 h-8 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg> 
                            <span class="font-medium p-1 text-blue-500">Editar</span>
                        </a>
                        <a href="{{ route('room.destroy', ['id' => $room->id]) }}" class="flex">
                            <svg class="w-8 h-8 text-red-500 ml-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                            <span class="font-medium p-1 text-red-500">Excluir</span>
                        </a>
                    </div>
                </div>
            </div>

        @endforeach
    </div>
</div>
@endsection
