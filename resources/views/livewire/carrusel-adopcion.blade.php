<div>

    <style>
   

        .carousel {
            width: 60%;
            height: 60%;
            margin-bottom: -20%;
        }

        .carousel-container {
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .slide {
            display: flex;
            transition: transform 0.5s ease;
        }

        .prev-btn,
        .next-btn {
            border: none;
            background: none;
            font-size: 1.5rem;
            color: rgb(255, 255, 255);
        }
/* 
        * {
            box-sizing: border-box;
        }
/*  */
        html,
        body {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
        }

        body {
            font-family: 'DM Sans', sans-serif;
        } */

        input[type=radio] {
            display: none;
        }

        .card {
            position: absolute;
            width: 400px;
            /* Ajuste del ancho de la imagen */
            height: 400px;
            /* Ajuste del alto de la imagen */
            left: 0;
            right: 0;
            margin: auto;
            transition: transform .4s ease;
            cursor: pointer;
        }

        .container {
            width: 100%;
            max-width: 1000px;
            max-height: 400px;
            /* Ajuste de la altura del contenedor */
            height: 65%;
            transform-style: preserve-3d;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 auto;
            /* Añade esta línea para centrar horizontalmente */
        }

        .cards {
            margin-bottom: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            
        }
        .container img{
            border-radius: 100%;
        }

        #item-1:checked~.cards #circle-5,
        #item-2:checked~.cards #circle-1,
        #item-3:checked~.cards #circle-2,
        #item-4:checked~.cards #circle-3,
        #item-5:checked~.cards #circle-4 {
            transform: translateX(-70%) scale(.8);
            filter: grayscale(100%);
            max-width: 300px;
            max-height: 300px;
            z-index: 0;
        }

        #item-1:checked~.cards #circle-4,
        #item-2:checked~.cards #circle-5,
        #item-3:checked~.cards #circle-1,
        #item-4:checked~.cards #circle-2,
        #item-5:checked~.cards #circle-3 {
            transform: translateX(70%) scale(.8);
            filter: grayscale(100%);
            max-width: 300px;
            max-height: 300px;
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
            /* Ajusta el grosor, el estilo y el color del borde según tus necesidades */

        }

        #item-1:checked~.cards #circle-2,
        #item-2:checked~.cards #circle-3,
        #item-3:checked~.cards #circle-4,
        #item-4:checked~.cards #circle-5,
        #item-5:checked~.cards #circle-1 {
            transform: translateX(calc(-100% - 150px)) scale(0.8);
            filter: grayscale(100%);
            max-width: 200px;
            max-height: 200px;
            z-index: 0;
        }


        #item-1:checked~.cards #circle-1,
        #item-2:checked~.cards #circle-2,
        #item-3:checked~.cards #circle-3,
        #item-4:checked~.cards #circle-4,
        #item-5:checked~.cards #circle-5 {
            transform: translateX(calc(100% + 150px)) scale(.8);
            filter: grayscale(100%);
            max-width: 200px;
            max-height: 200px;
            z-index: 0;
        }
    </style>

    {{-- @foreach ($this->data as $item)
        <div>
            <img src="{{ asset($item['image']) }}" alt="{{ $item['title'] }}">
            <h1>{{ $item['title'] }}</h1>
            <p>{{ $item['description'] }}</p>
        </div>
    @endforeach --}}

        <section class="flex flex-col">
            <div class="carousel-container">
                <!-- Carrusel grande -->
                <div class="carousel relative overflow-hidden">
                    <div class="slide absolute flex">
                        <img src="./assets/images/img1.png" alt="">
                        <img src="./assets/images/img1.png" alt="">
                        <img src="./assets/images/img1.png" alt="">
                        <img src="./assets/images/img1.png" alt="">
                    </div>
                </div>
            </div>
            
            <!-- Carrusel pequeño -->
            <div class="container">
                <input type="radio" name="slider" id="item-1" checked>
                <input type="radio" name="slider" id="item-2">
                <input type="radio" name="slider" id="item-3">
                <input type="radio" name="slider" id="item-4">
                <input type="radio" name="slider" id="item-5">
        
                <div class="cards">
                    <label class="card" for="item-1" id="circle-1" onclick="selectCard(0)" class=" rounded-full">
                        <img src="./assets/images/img1.png" alt="circle">
                    </label>
                    <label class="card" for="item-2" id="circle-2" onclick="selectCard(1)">
                        <img src="./assets/images/img1.png" alt="circle">
                    </label>
                    <label class="card" for="item-3" id="circle-3" onclick="selectCard(2)">
                        <img src="./assets/images/img1.png" alt="circle">
                    </label>
                    <label class="card" for="item-4" id="circle-4" onclick="selectCard(3)">
                        <img src="./assets/images/img1.png" alt="circle">
                    </label>
                    <label class="card" for="item-5" id="circle-5" onclick="selectCard(4)">
                        <img src="./assets/images/img1.png" alt="circle">
                    </label>
                </div>
            </div>
        </section>


    <script>
        let currentIndex = 0;
        const slides = document.querySelectorAll('.slide');
        const totalSlides = slides[0].children.length;


        function updateSlide() {
            const slideWidth = slides[0].offsetWidth;
            const newTransformValue = -currentIndex * slideWidth;
            for (let i = 0; i < slides.length; i++) {
                slides[i].style.transform = `translateX(${newTransformValue}px)`;
            }
            // Al actualizar el carrusel grande, deseleccionamos todos los círculos en el carrusel pequeño
            document.querySelectorAll('.cards input[type="radio"]').forEach(radio => {
                radio.checked = false;
            });
            // Luego seleccionamos el círculo correspondiente al carrusel grande actual
            document.getElementById(`item-${currentIndex + 1}`).checked = true;
        }

        // Función para seleccionar un card en el carrusel pequeño y actualizar el carrusel grande
        function selectCard(index) {
            currentIndex = index;
            updateSlide();
        }
    </script>
</div>
