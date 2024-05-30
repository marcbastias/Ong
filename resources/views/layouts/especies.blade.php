<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('help.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">

    <!-- Estilo para el color de fondo utilizando Tailwind CSS -->
    <style>
        body {
            background-color: #404040;
        }
    </style>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles

</head>

<body class="bg-color">
    <x-banner />
    @livewire('navigation')

    <div class=" grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-col-3 gap-2 justify-center items-center">

        <div class="container mx-auto text-white">
            <h1 class="text-2xl sm:text-3xl md:text-5xl font-bold mb-2 sm:mb-4 px-28">{{ $titulo }}</h1>
            <h3 class="text-base sm:text-lg md:text-xl font-semibold mb-2 sm:mb-4 px-28">{{ $texto }}</h3>
        </div>
        <div class='w-auto ml-auto  mb-auto pl-10'>
            <img src="{{ $imagen }}" alt="" class="object-cover shadow-2xl shadow-zinc-900">
        </div>
    </div>

    <!-- New sections start here -->
    <div class="mt-40 font-bold text-white px-28">
        <h1 class="text-4xl">{{ $segundoTitulo }}</h1>
        <h3 class="text-base sm:text-lg md:text-xl font-semibold mb-2 sm:mb-4 text-justify">{{ $segundoTexto }}</h3>
    </div>

    <div class="mt-20 font-bold text-white px-28">
        <h2 class="text-3xl">Amenazas</h2> <br>
        <p class="text-base sm:text-lg md:text-xl font-semibold mb-2 sm:mb-4 text-justify">{{ $amenzas }}</p>
    </div>

    <div class="mt-20 font-bold text-white px-28">
        <h2 class="text-3xl">Soluciones</h2> <br>
        <p class="text-base sm:text-lg md:text-xl font-semibold mb-2 sm:mb-4 text-justify">{{ $solucion }}</p>
    </div>v>

    <!-- Importar el componente de carrusel de adopción -->

    @livewireScripts
</body>

</html>
