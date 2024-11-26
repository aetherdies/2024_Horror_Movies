<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Horror Movies') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7x1 mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="font-semibold text-lg mb-4">Horror Movie Details:</h3>
                        <x-horror-details
                            :title="$horror->title"
                            :image="$horror->image"
                            :year="$horror->year"
                            :description="$horror->description"
                        />
                    <h4 class="font-semibold text-md mt-8">Reviews</h4>
                    @if($horror->reviews->isEmpty())
                        <p class="text-gray-600">No reviews yet.</p>
                    @else
                        <ul class="mt-4 space-y-4">
                            @foreach ($horror->reviews as $review)
                                <li class="bg-gray-100 p-4 rounded-lg">
                                    <p class="font-semibold">{{ $review->user->name }} ({{ $review->created_at->format('M d, Y') }})</p>
                                    <p>Rating: {{ $review->rating }} / 5</p>
                                    <p>{{ $review->comment }}</p>

                                    @if ($review->user->is(auth()->user()) || auth()->user()->role === 'admin')

                                    <a href="{{ route('reviews.edit' , $review) }}" class="bg-yellow-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded">
                                        {{ __('Edit Review') }}
                                    </a>
                                        <form method="POST" action="{{ route('reviews.destroy' , $review) }}">
                                            @csrf
                                            @method('delete')
                                            <x-danger-button :href="route('reviews.destroy' , $review)"
                                                                onclick="event.preventDefault(); this.closest('form').submit();">
                                            {{ __('Delete Review') }}
                                            </x-danger-button>
                                        </form>
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
