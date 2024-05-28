<x-app-layout>
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
</x-app-layout>
