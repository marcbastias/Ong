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
                Unirse al voluntariado es una de las maneras más significativas de contribuir al bienestar de tu comunidad. Al dedicar tu tiempo y habilidades, puedes marcar una diferencia real en la vida de los demás y en el entorno que te rodea. No solo ayudas a quienes lo necesitan, sino que también enriqueces tu propia vida a través de nuevas experiencias, conocimientos y amistades.
                Tu colaboración es invaluable. Ya sea en la educación, la salud, el medio ambiente o la asistencia social, cada esfuerzo cuenta. Te invitamos a ser parte de este cambio positivo. ¡Sé voluntario y ayúdanos a construir un mundo mejor!
            </p>
        </div>

        <!-- Bloque para mostrar los eventos -->
        <div class="grid lg:grid-cols-2 md:grid-cols-2 grid-cols-1 gap-6">
            @foreach ($events as $event)
                <div class="flex justify-center items-center bg-gray-200 p-4 rounded-lg">
                    <a href="{{ route('events.show', $event) }}" class="block w-full h-full">
                        <h2 class="text-xl font-bold">{{ $event->name }}</h2>
                        <p class="text-gray-600">{{ $event->description }}</p>
                        <p class="text-gray-600">Ubicación: {{ $event->location }}</p>
                        <p class="text-gray-600">Fecha de inicio: {{ $event->start_date }}</p>
                        <p class="text-gray-600">Fecha de fin: {{ $event->end_date }}</p>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
