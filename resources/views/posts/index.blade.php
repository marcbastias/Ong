<x-app-layout>
    <div>
        <main class="pb-4 text-white">
           <div class="bg-cover bg-center bg-no-repeat relative flex justify-center items-center flex-col text-center" style="background-image: url('../assets/images/blog.png'); height: 50vh;">

                <p class="font-bold text-5xl mb-20">
                    BLOG</span>
                </p>
                <p class="text-2xl mt-4" style="max-width: 70%;">
                    En nuestra ONG, nos dedicamos apasionadamente a la protección y el bienestar de los animales en
                    situación de vulnerabilidad en todo el mundo. A través de nuestro blog, compartimos historias,
                    noticias y recursos para concienciar a la sociedad sobre la importancia de la protección animal y
                    promover el respeto hacia todas las especies. Creemos que al informar y educar a las personas,
                    podemos inspirar cambios positivos en la forma en que tratamos a los animales y trabajar hacia un
                    futuro más compasivo y justo para todas las criaturas.
                </p>
            </div>
        </main>
    </div>

    <section class="mt-20 p-16">
        <div class="flex items-center justify-center mb-4 mt-2">
            <hr class="flex-1 border-t-2 border-[#8AB469]">
            <p class="font-bold mx-4 text-[#8AB469] text-3xl">LOS POSTS</p>
            <hr class="flex-1 border-t-2 border-[#8AB469]">
        </div>
        <div class="mx-56 flex justify-center p-8">
            <p class="text-center text-xl">
                Nuestro blog es una herramienta vital para compartir información y generar conciencia sobre los
                desafíos que enfrentan los animales en todo el mundo. A través de nuestros artículos, destacamos
                temas importantes como la conservación de especies en peligro de extinción, el bienestar animal y la
                crueldad hacia los animales. Creemos en la importancia de dar voz a aquellos que no pueden hablar por
                sí mismos y trabajar activamente para proteger sus derechos y mejorar sus vidas.
            
        </div>
    </section>

    <div class="container py-8">
        <div class="grid lg:grid-cols-2 md:grid-cols-2 grid-cols-1 gap-6">
            @foreach ($posts as $post)
                <article class="flex shadow-lg rounded-lg overflow-hidden" style="background-color: #8AB469">
                    <div class="w-1/3 bg-cover bg-center" 
                        style="background-image: url(@if ($post->image) {{ Storage::url($post->image->url) }} @else https://cdn.pixabay.com/photo/2017/02/14/19/16/php-2066704_1280.jpg @endif)">
                    </div>
                    <div class="w-2/3 p-4 flex flex-col justify-between">
                        <div>
                            @foreach ($post->tags as $tag)
                                <a href="{{ route('posts.tag', $tag) }}" class="inline-block px-3 h-6 bg-{{ $tag->color }}-600 text-white rounded-full">{{ $tag->name }}</a>
                            @endforeach
                        </div>
                        <h1 class="text-lg font-bold mt-2">
                            <a href="{{ route('posts.show', $post) }}">{{ $post->name }}</a>
                        </h1>
                        <p class="text-gray-600 text-sm mt-2">
                            {{ \Illuminate\Support\Str::limit(strip_tags($post->body), 200) }}
                        </p>
                    </div>
                </article>
            @endforeach
        </div>
    
        <div class="mt-4">
            {{ $posts->links() }}
        </div>
    </div>
    
    
    
    

</x-app-layout>
