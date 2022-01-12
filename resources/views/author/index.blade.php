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
                    
                    <a href="{{ route('author.create') }}" class="text-center border border-blue-500 mb-20 rounded py-2 px-4 bg-blue-500 hover:bg-blue-700 text-white">Create</a>

                    <table class="table-fixed">
                        <thead>
                            <tr>
                                <th class="w-1/2">No.</th>
                                <th class="w-1/4">Author Name</th>
                                <th class="w-1/4">Book Name</th>
                                <th class="w-1/4">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($model as $key => $item)
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>
                                        @forelse ($item->books as $value)
                                            {{ $value->name }} <br>
                                        @empty
                                            
                                        @endforelse
                                    </td>
                                    <td>
                                        <a href="{{ route('author.edit', ['id' => $item->id]) }}">Edit</a> | <a href="{{ route('author.destroy', ['id' => $item->id]) }}">Delete</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3">No Data!</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>