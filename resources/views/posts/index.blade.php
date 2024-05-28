<x-app-layout>
    <div>
        <main class="pb-4">
            <div class="bg-cover bg-center bg-no-repeat flex justify-center items-center flex-col text-center"
                style="background-image: url('../assets/images/blog.png'); height: 50vh;">
                <p class="font-bold text-5xl text-black">
                    BL<span style="color: #4CAF50;">OG</span>
                </p>
                <p class="text-2xl mt-4" style="max-width: 70%;">
                    En nuestra ONG, nos dedicamos apasionadamente a la protección y el bienestar de los animales en
                    situación de vulnerabilidad en todo el mundo. Durante mucho tiempo, hemos estado en la vanguardia de
                    la lucha contra la extinción, el maltrato y el abandono de animales, trabajando incansablemente para
                    asegurar un futuro más brillante para todas las especies.
                </p>
            </div>
        </main>
    </div>

    <section class="mt-24 p-16">
        <div class="flex items-center justify-center mb-4 mt-2">
            <hr class="flex-1 border-t-2 border-[#8AB469]">
            <p class="font-bold mx-4 text-[#8AB469] text-3xl">LOS POSTS</p>
            <hr class="flex-1 border-t-2 border-[#8AB469]">
        </div>
        <div class="mx-56 flex justify-center p-8">
            <p class="text-center text-3xl">
                En nuestra ONG, nos dedicamos apasionadamente a la protección y el bienestar de los animales en
                situación de vulnerabilidad en todo el mundo. Durante mucho timepo, hemos estado en la vanguardia de la
                lucha contra la extinción, el maltrato y el abandono de animales, trabajando incansablemente para
                asegurar un futuro más brillante para todas las especies.
            </p>
        </div>
    </section>

    <div class="container py-8">
        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-6">
            @foreach ($posts as $post)
                <article class="w-full h-80 bg-cover bg-center bg-black"
                    style="background-image: url(@if ($post->image) {{ Storage::url($post->image->url) }} @else https://cdn.pixabay.com/photo/2017/02/14/19/16/php-2066704_1280.jpg @endif)">
                    <!-- con el if se le da un span de 2 a la primera iteracion del foreach -->
                    <div class="w-full h-full px-8 flex flex-col justify-center">
                        <div>
                            @foreach ($post->tags as $tag)
                                <a href="{{ route('posts.tag', $tag) }}"
                                    class="inline-block px-3 h-6 bg-{{ $tag->color }}-600 text-white rounded-full">{{ $tag->name }}</a>
                            @endforeach
                        </div>
                        <h1 class="text-4xl text-white leading-8 font-bold mt-4">
                            <a href="{{ route('posts.show', $post) }}">{{ $post->name }}</a>
                        </h1>
                    </div>
                </article>
            @endforeach
        </div>

        <div class="mt-4">
            {{ $posts->links() }}
        </div>

</x-app-layout>
