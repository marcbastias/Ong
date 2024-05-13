<x-privacy-layout>
    <x-slot name="title">CONTACTA CON NOSOTROS</x-slot>
    <x-slot name="content">
        La Fundación Patitas Amigas ("nosotros", "nuestro" o "nosotros") se compromete a proteger la
        privacidad de los usuarios ("usted" o "su") de nuestro sitio web y cualquier otro servicio que ofrecemos. Esta
        Política de Privacidad describe cómo recopilamos, utilizamos y protegemos la información personal que usted
        proporciona a través de nuestro sitio web.
    </x-slot>

    <x-slot name="additionalContent">
        <style>
            body {
                background-color: #404040;
            }

            .container {
                width: 95%;
                max-width: 80%;
                transform-style: preserve-3d;
                display: flex;
                justify-content: center;
                align-items: center;
                margin: 0 auto;
                margin-top: 20px;
            }



            .card {
                position: absolute;
                width: 250px;
                height: 250px;
                left: 0;
                right: 0;
                margin: auto;
                transition: transform .4s ease;
                cursor: pointer;
            }

            img {
                width: 100%;
                height: 100%;
                border-radius: 10px;
                object-fit: cover;
            }

            input[type=radio] {
                display: none;
            }

            #item-1:checked~.cards #circle-1,
            #item-2:checked~.cards #circle-2,
            #item-3:checked~.cards #circle-3,
            #item-4:checked~.cards #circle-4,
            #item-5:checked~.cards #circle-5 {
                transform: translateX(0) scale(1);
                opacity: 1;
                z-index: 1;
                border-radius: 100%;
                border: 10px solid #8AB469;
            }

            #item-1:checked~.cards #circle-2,
            #item-2:checked~.cards #circle-3,
            #item-3:checked~.cards #circle-4,
            #item-4:checked~.cards #circle-5,
            #item-5:checked~.cards #circle-1 {
                transform: translateX(80%) scale(0.8);
                filter: grayscale(100%);
                max-width: 250px;
                max-height: 250px;
                z-index: 0;
            }

            #item-1:checked~.cards #circle-3,
            #item-2:checked~.cards #circle-4,
            #item-3:checked~.cards #circle-5,
            #item-4:checked~.cards #circle-1,
            #item-5:checked~.cards #circle-2 {
                transform: translateX(0) scale(1);
                opacity: 1;
                z-index: 1;
                border-radius: 100%;
                border: 10px solid #8AB469;
            }

            #item-1:checked~.cards #circle-4,
            #item-2:checked~.cards #circle-5,
            #item-3:checked~.cards #circle-1,
            #item-4:checked~.cards #circle-2,
            #item-5:checked~.cards #circle-3 {
                transform: translateX(-80%) scale(0.8);
                filter: grayscale(100%);
                max-width: 250px;
                max-height: 250px;
                z-index: 0;
            }

            #item-1:checked~.cards #circle-5,
            #item-2:checked~.cards #circle-1,
            #item-3:checked~.cards #circle-2,
            #item-4:checked~.cards #circle-3,
            #item-5:checked~.cards #circle-4 {
                transform: translateX(-200%) scale(0.8);
                filter: grayscale(100%);
                max-width: 175px;
                max-height: 175px;
                z-index: 0;
            }

            .prev-btn,
            .next-btn {
                border: none;
                background: none;
                font-size: 2rem;
                color: #8AB469;
                cursor: pointer;
            }

            .prev-btn:hover,
            .next-btn:hover {
                color: #6E944A;
            }
        </style>
        </head>

        <body>
            <!-- Carrusel pequeño -->
            <div class="container">
                <button class="next-btn absolute top-1/2 right-0 transform -translate-y-1/2" onclick="nextSlide()">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
                <input type="radio" name="slider" id="item-1" checked>
                <input type="radio" name="slider" id="item-2">
                <input type="radio" name="slider" id="item-3">
                <input type="radio" name="slider" id="item-4">
                <input type="radio" name="slider" id="item-5">

                <div class="cards">
                    <label class="card" for="item-1" id="circle-1" onclick="selectCard(0)">
                        <img src="{{ asset('/prueba_contacto/animal1.png') }}" alt="circle">
                    </label>
                    <label class="card" for="item-2" id="circle-2" onclick="selectCard(1)">
                        <img src="{{ asset('assets/prueba_contacto/animal1.png') }}" alt="circle">
                    </label>
                    <label class="card" for="item-3" id="circle-3" onclick="selectCard(2)">
                        <img src="{{ asset('assets/prueba_contacto/animal1.png') }}" alt="circle">
                    </label>
                    <label class="card" for="item-4" id="circle-4" onclick="selectCard(3)">
                        <img src="{{ asset('assets/prueba_contacto/animal1.png') }}" alt="circle">
                    </label>
                    <label class="card" for="item-5" id="circle-5" onclick="selectCard(4)">
                        <img src="{{ asset('assets/prueba_contacto/animal1.png') }}" alt="circle">
                    </label>
                </div>

                <button class="prev-btn absolute top-1/2 left-0 transform -translate-y-1/2" onclick="prevSlide()">
                    <svg xmlns="http://www.w3.org/2000/svg" class=" h-24 w-24" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
            </div>

            <script>
                let currentIndex = 0;
                const totalSlides = 5; // Cantidad total de imágenes en el carrusel

                function prevSlide() {
                    currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
                    updateSlide();
                }

                function nextSlide() {
                    currentIndex = (currentIndex + 1) % totalSlides;
                    updateSlide();
                }

                function updateSlide() {
                    // Al actualizar el carrusel pequeño, seleccionamos el círculo correspondiente
                    document.querySelectorAll('.cards input[type="radio"]').forEach(radio => {
                        radio.checked = false;
                    });
                    document.getElementById(`item-${currentIndex + 1}`).checked = true;
                }

                // Función para seleccionar un card en el carrusel pequeño y actualizar el carrusel grande
                function selectCard(index) {
                    currentIndex = index;
                    updateSlide();
                }

                // Llama a updateSlide() para iniciar desde la primera imagen
                updateSlide();
            </script>

    </x-slot>
</x-privacy-layout>
