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
                    <h3 class="font-semibold text-lg mb-4">List of Horror Movies:</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach($horrors as $Horror)
                        <x-horror-card
                            :title="$Horror->title"
                            :director="$Horror->director"
                            :image="$Horror->image"
                            :year="$Horror->year"
                            :description="$Horror->description"
                        />
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
