<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Author') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    
                    <form action="{{ ($update) ? route('author.update', ['id' => $model->id]) : route('author.store') }}" method="post">
                        @csrf

                        Name: <input type="text" name="name" value="{{ $model->name ?? null }}"><br>

                        <input type="submit">
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>