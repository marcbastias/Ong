<x-app-layout>
    <div class="container py-8">
        <div class="grid grid-cols-1 gap-6 justify-center">

            {{-- Contenido principal --}}
            <div class="text-center">
                <h2 class="text-4xl font-bold text-green-600 mb-4">{{ $post->name }}</h2>
                <figure class="flex justify-center items-center mb-4" style="height: 60vh;">
                    @if ($post->image)
                        <img class="w-full h-full object-cover object-center" src="{{ Storage::url($post->image->url) }}" alt="">
                    @else
                        <img class="w-full h-80 object-cover object-center" src="{{ asset('images/default-post-image.jpg') }}" alt="">
                    @endif
                </figure>
                <div class="text-lg text-black font-bold mb-4 mt-2">
                    {!! $post->extract !!}
                </div>
                <div class="text-base text-gray-500 text-justify">
                    {!! $post->body !!}
                </div>
                <div class="mt-4 flex items-center justify-center text-sm text-gray-600">
                    @if ($post->user->profile_photo_path)
                        <img src="{{ asset($post->user->profile_photo_path) }}" class="w-8 h-8 rounded-full mr-2" alt="{{ $post->user->name }}'s profile picture">
                    @else
                        <img src="{{ asset('images/default-profile-image.jpg') }}" class="w-8 h-8 rounded-full mr-2" alt="Default profile picture">
                    @endif
                    <div>Author: {{ $post->user->name }} | Date: {{ $post->created_at->format('M d, Y') }}</div>
                </div>
            </div>

            {{-- Contenido relacionado --}}
            <aside class="mt-8">
                <h1 class="text-2xl font-bold text-gray-600 mb-4 text-center">More on {{ $post->category->name }}</h1>
                <div class="grid lg:grid-cols-2 md:grid-cols-2 grid-cols-1 gap-6 justify-center">
                    @foreach ($similars as $similar)
                        <article class="flex shadow-lg rounded-lg overflow-hidden" style="background-color: #8AB469">
                            <a href="{{ route('posts.show', $similar) }}" class="w-1/3 bg-cover bg-center" 
                                style="background-image: url(@if ($similar->image) {{ Storage::url($similar->image->url) }} @else {{ asset('images/default-post-image.jpg') }} @endif)">
                            </a>
                            <div class="w-2/3 p-4 flex flex-col justify-between">
                                <div>
                                    <a href="{{ route('posts.category', $similar->category) }}" class="inline-block px-3 h-6 bg-gray-600 text-white rounded-full">{{ $similar->category->name }}</a>
                                </div>
                                <h1 class="text-lg font-bold mt-2">
                                    <a href="{{ route('posts.show', $similar) }}">{{ $similar->name }}</a>
                                </h1>
                                <p class="text-gray-600 text-sm mt-2">
                                    {!! \Illuminate\Support\Str::limit(strip_tags($similar->body), 200) !!}
                                </p>
                            </div>
                        </article>
                    @endforeach
                </div>
            </aside>
        </div>
    </div>
</x-app-layout>
