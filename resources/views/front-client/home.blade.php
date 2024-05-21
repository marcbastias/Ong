<x-app-layout>

    <div>

        <main class="pb-4">
            <div class="bg-cover bg-center bg-no-repeat h-screen flex justify-center items-center flex-col"
                style="background-image: url('./assets/images/backgroundHome1.png');">
                <p class="font-bold text-3xl text-black text-center">AYÚDANOS A <span
                        style="color: #4CAF50;">CONSERVAR</span>
                    <br>LA NATURALEZA
                </p>
            </div>
        </main>

    </div>

    <section class="mt-24 p-16">
        <div class="flex items-center justify-center mb-6 mt-8">
            <hr class="flex-1 border-t-2 border-[#8AB469]">
            <p class="font-bold mx-4 text-[#8AB469] text-3xl">AYÚDANOS A CONSERVAR</p>
            <hr class="flex-1 border-t-2 border-[#8AB469]">
        </div>
        <div class="mx-56 flex justify-center p-8">
            <p class="text-center text-3xl">
                Únete a la mayor organización independiente de defensa de la naturaleza. Gracias al apoyo de nuestros
                socios y socias podemos seguir luchando por la conservación de lugares únicos y especies en peligro en
                todo el mundo. Al unirte a WWF estás ayudando a conservar especies amenazadas como el lince y el lobo
                ibérico y a proteger bosques y océanos. ¡Contamos contigo!, algunos de esos ejemplos los puedes
                encontrar aquí.
            </p>
        </div>
    </section>

    <section class="bg-[#404040] mt-24 shadow-lg p-8 h-[780px]">
        <div class="flex items-center justify-center mb-6 mt-8">
            <hr class="flex-1 border-t-2 border-[#8AB469]">
            <p class="font-bold mx-4 text-[#8AB469] text-3xl">NOTICIAS RECIENTES</p>
            <hr class="flex-1 border-t-2 border-[#8AB469]">
        </div>
        <div class="mt-16 gap-60 w-11/12 mx-auto md:w-10/12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
            @foreach ($recentNews as $news)
                <div>
                    <div class="flex justify-center">
                        <!-- Mostrar la imagen de la noticia -->
                        <img src="../assets/images/loro.webp" alt="Imagen">
                    </div>
                    <div class="text-white bg-[#8AB469] p-4 h-[245px]">
                        <!-- Añadido p-4 para agregar un relleno interior -->
                        <h2 class="font-bold text-xl mb-2 text-center">{{ $news->title }}</h2>
                        <p class="text-gray-300 text-center whitespace-pre-wrap">{{ $news->content }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </section>


    <section class="mt-36 p-6 rounded-lg">
        <div class="bg-[#8AB469] p-16 w-3/5 h-[800px] mx-auto">
            <h1 class="text-white text-3xl font-bold mb-16 text-center">SUSCRÍBETE A NUESTRO NEWSLETTER</h1>
            <form method="POST">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12 mb-20 w-11/12 mx-auto text-[17px]">
                    <div>
                        <label for="nombres" class="font-bold text-white block mb-2">Nombre:</label>
                        <input type="text" id="nombres" name="nombres" placeholder="Ingrese su nombre"
                            class="w-full px-4 py-3 border-2 border-white rounded-full bg-[#7ECA42] text-white placeholder-white">
                    </div>
                    <div>
                        <label for="apellidos" class="font-bold text-white block mb-2">Apellidos:</label>
                        <input type="text" id="apellidos" name="apellidos" placeholder="Ingrese sus apellidos"
                            class="w-full px-4 py-3 border-2 border-white rounded-full bg-[#7ECA42] text-white placeholder-white">
                    </div>
                </div>
                <div class="mb-20 mx-auto w-[900px] text-[17px]">
                    <label for="correo" class="font-bold text-white block mb-2">Correo Electrónico:</label>
                    <input type="email" id="correo" name="correo" placeholder="Ingrese su correo electrónico"
                        class="w-full px-4 py-3 border-2 border-white rounded-full bg-[#7ECA42] text-white placeholder-white">
                </div>
                <div class="mx-14 text-[19px]">
                    <div class="mb-6">
                        <input type="checkbox" id="mayor_edad" name="mayor_edad" class="mr-2"
                            style="appearance: none; width: 20px; height: 20px; border: 2px solid white; border-radius: 4px; background-color: #7ECA42; outline: none;">
                        <label class="font-bold text-white" for="mayor_edad">Soy mayor de edad</label>
                    </div>
                    <div class="mb-6">
                        <input type="checkbox" id="acepto_proteccion_datos" name="acepto_proteccion_datos" class="mr-2"
                            style="appearance: none; width: 20px; height: 20px; border: 2px solid white; border-radius: 4px; background-color: #7ECA42; outline: none;">
                        <label class="font-bold text-white" for="acepto_proteccion_datos">He leído y acepto la información
                            básica sobre la protección de datos*</label>
                    </div>
                </div>
                <button type="submit"
                    class="font-bold mt-28 py-3 px-24 bg-[#7ECA42] text-white rounded-full justify-center items-center mx-auto block">SUSCRIBIRME</button>
            </form>
        </div>
    </section>
    
    

    <section class="mt-32 shadow-lg p-8 h-[1000px]">
        <div class="flex items-center justify-center mb-6 mt-8">
            <hr class="flex-1 border-t-2 border-[#8AB469]">
            <p class="font-bold mx-4 text-[#8AB469] text-3xl">COLABORA CON NOSOTROS</p>
            <hr class="flex-1 border-t-2 border-[#8AB469]">
        </div>
        <div class="flex justify-center gap-28 mt-16 items-center">
            <!-- Carta 1 -->
            <div class="w-[380px] bg-[#8AB469] p-4 rounded-[50px] text-center h-[500px]">
                <img src="../assets/images/tucan_inicio.png" alt="Imagen" class="w-44 h-44 rounded-full mx-auto mb-4 mt-3">
                <div class="mt-7">
                    <h2 class="text-white text-lg font-bold mb-2">QUIERO SER SOCIO/A</h2>
                    <p class="text-white mb-4 mt-3">Los socios y socias son un pilar y altavoz de nuestro trabajo, aseguran la defensa de la naturaleza para las generaciones presentes y futuras.</p>
                </div>
                <button class="mt-9 py-2 px-14 bg-[#404040] text-white font-bold rounded-full">COLABORAR</button>
            </div>
    
            <!-- Carta 2 -->
            <div class="bg-[#8AB469] p-4 rounded-[50px] text-center w-[380px] h-[500px]">
                <img src="../assets/images/perro_inicio.png" alt="Imagen" class="w-44 h-44 rounded-full mx-auto mb-4 mt-3">
                <div class="mt-7">
                    <h2 class="text-white text-lg font-bold mb-2">QUIERO HACER UNA DONACIÓN</h2>
                    <p class="text-white mb-4 mt-3">Los socios y socias son un pilar y altavoz de nuestro trabajo, aseguran la defensa de la naturaleza para las generaciones presentes y futuras.</p>
                </div>
                <button class="mt-9 py-2 px-14 bg-[#404040] text-white font-bold rounded-full">COLABORAR</button>
            </div>
    
            <!-- Carta 3 -->
            <div class="w-[380px] bg-[#8AB469] p-4 rounded-[50px] text-center h-[500px]">
                <img src="../assets/images/oso_inicio.png" alt="Imagen" class="w-44 h-44 rounded-full mx-auto mb-4 mt-3">
                <div class="mt-7">
                    <h2 class="text-white text-lg font-bold mb-2">ADOPCION SIMBOLICA</h2>
                    <p class="text-white mb-4 mt-3">Los socios y socias son un pilar y altavoz de nuestro trabajo, aseguran la defensa de la naturaleza para las generaciones presentes y futuras.</p>
                </div>
                <button class="mt-9 py-2 px-14 bg-[#404040] text-white font-bold rounded-full">COLABORAR</button>
            </div>
        </div>
    </section>
    
    
    
</x-app-layout>
