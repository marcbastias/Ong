<x-app-layout>
    <div>
        <main class="pb-4">
            <div class="bg-cover bg-center bg-no-repeat h-screen flex justify-center items-center flex-col"
                style="background-image: url('../assets/images/voluntarios.jpg');">
                <p class="text-5xl text-white text-center ml-14" style="font-weight: bold;"><span>VOLUNT</span><span
                        style="color: #4CAF50;">ARIADOS </span></p>
            </div>
        </main>
    </div>

    <div class="mt-2 p-16">
        <div class="flex items-center">
            <hr style="flex: 1; border-color: #4CAF50;">
            <p class="m-0 text-2xl" style="color: #4CAF50;">SE VOLUNTARIO Y AYUDANOS</p>
            <hr style="flex: 1; border-color: #4CAF50;">
        </div>
        <div class="flex justify-center p-8">
            <p class="text-center text-2xl">
                Unirse al voluntariado es una de las maneras más significativas de contribuir al bienestar de tu comunidad. Al dedicar tu tiempo y habilidades, puedes marcar una diferencia real en la vida de los demás y en el entorno que te rodea. No solo ayudas a quienes lo necesitan, sino que también enriqueces tu propia vida a través de nuevas experiencias, conocimientos y amistades. Tu colaboración es invaluable. Ya sea en la educación, la salud, el medio ambiente o la asistencia social, cada esfuerzo cuenta. Te invitamos a ser parte de este cambio positivo. ¡Sé voluntario y ayúdanos a construir un mundo mejor!
            </p>
        </div>

<!-- Bloque para mostrar los eventos -->
<div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-6 justify-center">
    @foreach ($events as $event)
        <div class="flex justify-center items-center p-4 rounded-lg" style="background-color: #8AB469">
            <a href="{{ route('events.show', $event) }}" class="block w-full h-full">
                {{-- Aquí se muestra la imagen --}}
                <img src="{{ $event->url }}" alt="{{ $event->name }}" class="w-full h-auto mb-4">
                {{-- Información del evento --}}
                <h2 class="text-xl font-bold">{{ $event->name }}</h2>
                <p class="text-gray-600">{{ $event->description }}</p>
                <p class="text-gray-600">Ubicación: {{ $event->location }}</p>
                <p class="text-gray-600">Fecha de inicio: {{ $event->start_date }}</p>
                <p class="text-gray-600">Fecha de fin: {{ $event->end_date }}</p>
            </a>
        </div>
    @endforeach
</div>

    <div class="flex items-center justify-center ">
    <hr style="flex: 1; border-color: #4CAF50; ">
    <p class="m-0 text-2xl text-center" style="color: #4CAF50;">UNIRSE AL <br> VOLUNTARIADO</p>
    <hr style="flex: 1; border-color: #4CAF50;">
</div>

<section class="mt-36 p-6 rounded-lg font-primary font-thin">
        <div class="bg-[#8AB469] p-16 w-3/5 h-[1200px] mx-auto">
            <h1 class="text-white text-3xl  mb-16 text-center">UNETE A NUESTRA ONG</h1>
            <form method="POST" action="{{ route('subscribe') }}">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12 mb-20 w-11/12 mx-auto text-[17px]">
                    <div>
                        <label for="nombres" class=" text-white block mb-2">Nombre:</label>
                        <input type="text" id="nombres" name="nombres" placeholder="Ingrese su nombre"
                            class="w-full px-4 py-3 border-2 border-white rounded-full bg-[#7ECA42] text-white placeholder-white">
                    </div>
                    <div>
                        <label for="apellidos" class=" text-white block mb-2">Apellidos:</label>
                        <input type="text" id="apellidos" name="apellidos" placeholder="Ingrese sus apellidos"
                            class="w-full px-4 py-3 border-2 border-white rounded-full bg-[#7ECA42] text-white placeholder-white">
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12 mb-20 w-11/12 mx-auto text-[17px]">
                    <div>
                        <label for="fecha de nacimiento" class=" text-white block mb-2">Fecha de nacimiento:</label>
                        <input type="text" id="fecha de nacimiento" name="fecha de nacimiento" placeholder="Ingrese su fecha de nacimiento"
                            class="w-full px-4 py-3 border-2 border-white rounded-full bg-[#7ECA42] text-white placeholder-white">
                    </div>
                    <div>
                        <label for="Provincia" class=" text-white block mb-2">Provincia:</label>
                        <input type="text" id="Provincia" name="Provincia" placeholder="Ingrese su provincia"
                            class="w-full px-4 py-3 border-2 border-white rounded-full bg-[#7ECA42] text-white placeholder-white">
                    </div>
                </div>
                <div class="mb-20 mx-auto text-[17px] overflow-hidden">
                    <label for="correo" class=" text-white block mb-2">Correo Electrónico:</label>
                    <input style="overflow:hidden" type="email" id="correo" name="correo"
                        placeholder="Ingrese su correo electrónico"
                        class="w-full px-4 py-3 border-2 border-white rounded-full bg-[#7ECA42] text-white placeholder-white box-border">
                </div>
                <div class="mb-20 mx-auto text-[17px] overflow-hidden">
                    <label for="relación" class=" text-white block mb-2">¿Cual es tu relación con la ONG?</label>
                    <input style="overflow:hidden" type="text" id="relación" name="relación"
                        class="w-full px-4 py-3 border-2 border-white rounded-full bg-[#7ECA42] text-white placeholder-white box-border">
                </div>

                <div class="mx-14 text-[19px]">
                    <div class="mb-6">
                        <input type="checkbox" id="informacion" name="informacion" class="mr-2"
                            style="appearance: none; width: 20px; height: 20px; border: 2px solid white; border-radius: 4px; background-color: #7ECA42; outline: none;">
                        <label class=" text-white" for="informacion">Deseo recibir más información por email de la ONG</label>
                    </div>
                    <div class="mb-6">
                        <input type="checkbox" id="acepto_proteccion_datos" name="acepto_proteccion_datos"
                            class="mr-2"
                            style="appearance: none; width: 20px; height: 20px; border: 2px solid white; border-radius: 4px; background-color: #7ECA42; outline: none;">
                        <label class=" text-white" for="acepto_proteccion_datos">He leído y acepto la
                            información
                            básica sobre la protección de datos*</label>
                    </div>
                </div>
                <button type="submit"
                    class=" mt-28 py-3 px-24 bg-[#7ECA42] text-white rounded-full justify-center items-center mx-auto block">Enviar</button>
            </form>

        </div>
    </section>


</x-app-layout>
