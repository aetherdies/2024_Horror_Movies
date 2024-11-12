@props(['action', 'method'])

<form action="{{ $action }}" method="POST" enctype="multipart/form-data">
    @csrf
    @if($method === 'PUT' || $method === 'PATCH')
    @method($method)
    @endif

    <div class="mb-4">
        <label for="title" class="block text-sm text-gray-700">Title</label>
        <input
            type="text"
            name="title"
            id="title"
            value="{{ old('title', $horror->title ?? ") }}"
            required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm />
        @error('title')
            <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    @isset($horror->image)
    <div class="mb-4">
        <img src="{{ asset($horror->image) }}" alt="Horror Movie Poster" class="w-24 h-32 object-cover">
    </div>
    @endisset

    <div>
        <x-primary-button>
            {{ isset($horror) ? 'Update Horror Movie':'Add Horror Movie' }}
        </x-primary-button>
    </div>
</form>
