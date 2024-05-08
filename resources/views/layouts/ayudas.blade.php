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

    <div class="container mx-auto py-12">
        <div class="gap-8">
            <!-- Contenido a la izquierda -->
            <div class="text-white flex items-center justify-between">
                <div>
                    <h1 class="text-3xl font-bold mb-4">{{ $titulo }}</h1>
                    <h3 class="text-lg font-semibold mb-6">{{ $texto }}</h3>
                    <!-- Otros elementos de contenido -->
                </div>

            </div>
            <div class="w-auto">
                <img src="{{ $imagen }}" alt="Descripción de la imagen" class="mr-4 w-990 h-220">
            </div>
            <!-- Otros elementos del diseño -->
        </div>
    </div>

    <!-- Estilo para la palabra "conservar" -->
    <style>
        .text-conservar {
            color: #7ECA42;
        }
    </style>
</body>

</html>
