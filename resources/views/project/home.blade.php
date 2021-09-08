@extends('layouts.app')

@section('title', 'NIKO - Home')

@section('content')
    <main class="px-16 py-6">
        <header class="flex">
            <h2 class="text-gray-700 text-5xl font-semibold">Projetos</h2>
            <a href="{{ route('project.create') }}"class="font-medium text-lg ml-6 bg-green-500 p-2 rounded-lg text-white hover:bg-green-400 transition-shadow duration-100">
                Criar Projeto
            </a>
        </header>

        @if(empty($projects))
            <div class="mt-12 flex flex-wrap grid grid-cols-3 gap-x-6 gap-y-1">
                <!-- project cards -->

                @foreach ($projects as $project)
                    <div class="mt-6 bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-100">
                        <a href="{{ route('project.show', ['id' => $project->id]) }}">
                            <div class="p-6">
                                <span class="text-2xl text-gray-700 capitalize font-medium">{{ $project->title }}</span>
                                <span class="text-sm block">{{ $project->description }}</span>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        @else
            <div class="mt-12">
                <span class="font-medium text-2xl text-gray-500">Nenhum projeto foi criado ainda!</span>
            </div>
        @endif
    </main>
@endsection
