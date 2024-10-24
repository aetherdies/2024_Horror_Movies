@props(['title', 'year', 'description', 'image'])

<div class="border rounded-lg shadow-md p-6 bg-white hover:shadow-lg transititon duration-300">
    <h4 class="font-bold text-lg">{{ $title }}</h4>
    <img src="{{asset( 'image_url/HorrorPosters/' . $image)}}" alt="{{$title}}">
    <p class="text-gray-600">({{ $year }})</p>
    <p class="text-gray-800 mt-4">{{ $description }}</p>
</div>
