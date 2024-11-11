@if(session('success'))
<div class="mb-4 py-2 bg-green-100border border-green-500 text-green-700 rounded-md">
    {{ $slot }}
</div>
@endif
