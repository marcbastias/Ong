<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- Enlace al archivo CSS de Tailwind -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<x-app-layout>
{{-- <x-fondo-home class="block " /> --}}

<body class="bg-gray-100">

    <div>

        <main class="pb-4">
            <div class="bg-cover bg-center bg-no-repeat h-screen flex justify-center items-center flex-col"
                style="background-image: url('./storage/backgroundHome1.png');">
                <p class="text-3xl text-black">AYÚDANOS A CONSERVAR LA NATURALEZA</p>
            </div>
        </main>

    </div>
    <div class="mt-2 p-16">
        <div class="flex items-center ">
            <hr style="flex: 1; border-color: black;">
            <p class="m-0 text-2xl">AYÚDANOS A CONSERVAR </p>
            <hr style="flex: 1; border-color: black;">
        </div>
        <div class="flex justify-center p-8">
            <p class="text-center">
                Únete a la mayor organización independiente de defensa de la naturaleza. Gracias al apoyo de nuestros socios y socias podemos seguir luchando por la conservación de lugares únicos y especies en peligro en todo el mundo. Al unirte a WWF estás ayudando a conservar especies amenazadas como el lince y el lobo ibérico y a proteger bosques y océanos. ¡Contamos contigo!, algunos de esos ejemplos los puedes encontrar aquí.
            </p>
        </div>
    </div>
    
    <div>
        <div class="mt-2">
            <div class="flex items-center mb-8">
                <hr style="flex: 1; border-color: black;">
                <p class="m-0 text-2xl">NOTICIAS RECIENTES </p>
                <hr style="flex: 1; border-color: black;">
            </div>
            <section><img src="../storage/Rectangle 23.png" alt=""></section>
            <section><img src="../storage/Rectangle 35.png" alt=""></section>
            <section><img src="../storage/Rectangle 36.png" alt="">/section>
        </div>
        <footer class="py-4 border-t border-gray-300">
            <!-- Pie de página -->
            <p class="text-center text-gray-600">&copy; 2024 My Website. All rights reserved.</p>
        </footer>
</body>
</x-app-layout>
</html>
