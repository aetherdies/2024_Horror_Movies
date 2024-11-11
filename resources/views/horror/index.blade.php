<x-app-layout>
    <div class="py-12">
        <div class="max-w-7x1 mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="border p-4 rounded-lg shadow-md">
                        <a href="{{ route('horror.show', $horror) }}">
                            <x-horror-card :title="$horror->title" :image="$horror->image" />
                        </a>

                        <div class="mt-4 flex space-x-2">
                            <a href="{{ route('horror.edit', $horror) }}" class="text-gray-600 bg-orange-300 hover:bg-orange-700 font-bold py-2 px-4">
                                Edit
                            </a>

                            <form action="{{ route('horror.destroy', $horror) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this movie?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 hover:bg-red-700 text-gray-600 font-bold py-2 px-4 rounded">
                                    Delete
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
