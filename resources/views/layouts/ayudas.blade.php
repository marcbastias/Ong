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

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles

</head>
<body>
    <x-banner />
    @livewire('navigation')

        <div class="container mx-auto py-12">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Contenido a la izquierda -->
                <div>
                    <h1 class="text-3xl font-bold mb-4">{{ $titulo }}</h1>
                    <!-- Otros elementos de contenido -->
                </div>
                <!-- Otros elementos del diseño -->
            </div>
        </div>
</body>
</html>