<x-app-layout>
    <div class="container py-8">
        <div class="grid grid-cols-1 gap-6 justify-center">

            {{-- Contenido principal --}}
            <div class="text-center">
                {{-- Aquí se muestra la imagen --}}
                <img src="{{ $event->url }}" alt="{{ $event->name }}" class="w-full h-auto mb-4">
                <h2 class="text-4xl font-bold text-green-600 mb-4">{{ $event->name }}</h2>
                <div class="text-lg text-black font-bold mb-4 mt-2">
                    {{ $event->description }}
                </div>
                <div class="text-base text-gray-500 text-justify">
                    <p><strong>Start Date:</strong> {{ $event->start_date }}</p>
                    <p><strong>End Date:</strong> {{ $event->end_date }}</p>
                    <p><strong>Location:</strong> {{ $event->location }}</p>
                </div>
                <div class="mt-4 flex items-center justify-center text-sm text-gray-600">
                    @if ($event->organizer->profile_photo_path)
                        <img src="{{ asset($event->organizer->profile_photo_path) }}" class="w-8 h-8 rounded-full mr-2" alt="{{ $event->organizer->name }}'s profile picture">
                    @else
                        <img src="{{ asset('images/default-profile-image.jpg') }}" class="w-8 h-8 rounded-full mr-2" alt="Default profile picture">
                    @endif
                    <div>Organizer: {{ $event->organizer->name }}</div>
                </div>
            </div>

            {{-- Contenido relacionado --}}
            <aside class="mt-8">
                <h1 class="text-2xl font-bold text-gray-600 mb-4 text-center">More events</h1>
                <div class="grid lg:grid-cols-2 md:grid-cols-2 grid-cols-1 gap-6 justify-center">
                    {{-- Aquí puedes mostrar eventos similares o relacionados --}}
                </div>
            </aside>
        </div>
    </div>
</x-app-layout>
