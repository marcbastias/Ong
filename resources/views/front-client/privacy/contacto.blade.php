<x-privacy-layout>
    <x-slot name="title">CONTACTA CON NOSOTROS</x-slot>
    <x-slot name="content">

</x-privacy-layout>
<div class="content-page">
    <h1 class="font-extrabold text-3xl mt-20">ELIGE LA PREFERENCIA DE FORMULARIO QUE NECESITES</h1>
    <div class="container relative">
        <button class="prev-btn absolute top-1/2 left-0 transform -translate-y-1/2" onclick="prevSlide()">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
        </button>
        <input type="radio" name="slider" id="item-1" checked>
        <input type="radio" name="slider" id="item-2">
        <input type="radio" name="slider" id="item-3">
        <input type="radio" name="slider" id="item-4">
        <input type="radio" name="slider" id="item-5">

        <div class="carousel-container cards">

            <label class="card" for="item-1" id="circle-1" onclick="selectCard(0)">
                <img src="{{ asset('assets/images/carrusel-img/danger.jpeg') }}" alt="circle">
            </label>

            <label class="card" for="item-2" id="circle-2" onclick="selectCard(1)">
                <img src="../assets/images/carrusel-img/work-animal.jpg" alt="circle">
            </label>
            <label class="card" for="item-3" id="circle-3" onclick="selectCard(2)">
                <img src="../assets/images/carrusel-img/attention.jpg" alt="circle">
            </label>
            <label class="card" for="item-4" id="circle-4" onclick="selectCard(3)">
                <img src="../assets/images/carrusel-img/journalist.jpg" alt="circle">
            </label>
            <label class="card" for="item-5" id="circle-5" onclick="selectCard(4)">
                <img src="../assets/images/carrusel-img/animal4.png" alt="circle">
            </label>
        </div>

        <button class="next-btn absolute top-1/2 right-0 transform -translate-y-1/2" onclick="nextSlide()">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
        </button>
    </div>

    <div id="attentionTitle" class="bg-gray-800 rounded-4xl text-2xl text-white pt-3 pb-3 pr-12 pl-12 mb-24"
        style="border-radius: 25px;">
    </div>
    <div id="form1"class="contact-form">@include('front-client.components.forms.form-atention')</div>
    <div id="form2"class="contact-form" style="display: none">@include('front-client.components.forms.form-journalism')</div>
    <div id="form3"class="contact-form" style="display: none">@include('front-client.components.forms.form-otherInquiries')</div>
    <div id="form4"class="contact-form" style="display: none">@include('front-client.components.forms.form-help')</div>
    <div id="form5"class="contact-form" style="display: none">@include('front-client.components.forms.form-work')</div>
</div>

<style>
    .content-page {
        display: flex;
        flex-direction: column;
        margin: 0 auto;
        align-items: center;
    }

    .contact-form_title {
        font-size: 40px;
        font-weight: 900;
        color: white;
    }

    .contact-form {
        color: white;
        max-width: 90%;
        padding: 5%;
        background-color: #404040;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }


    .carousel-container {
        width: 90%;
        height: 60vh;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 0 auto;
    }

    .slide {
        display: flex;
        transition: transform 0.5s ease;
        max-width: 100%;
        margin: 0 auto;
    }

    .prev-btn,
    .next-btn {
        border: none;
        background: none;
        font-size: 1.5rem;
        color: rgb(255, 255, 255);
    }

    input[type=radio] {
        display: none;
    }

    .card {
        position: absolute;
        width: 350px;
        height: 350px;
        left: 0;
        right: 0;
        margin: auto;
        transition: transform .4s ease;
        cursor: pointer;
    }
    .card img {
    width: 100%;
    height: 100%;
    border-radius: 50%; /* Esto hace que la imagen sea redonda */
    object-fit: cover;
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

    .cards {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    img {
        width: 100%;
        height: 100%;
        border-radius: 10px;
        object-fit: cover;
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
        transform: translateX(80%) scale(0.8);
        filter: grayscale(100%);
        max-width: 250px;
        max-height: 250px;
        z-index: 0;
    }

    #item-1:checked~.cards #circle-1,
    #item-2:checked~.cards #circle-2,
    #item-3:checked~.cards #circle-3,
    #item-4:checked~.cards #circle-4,
    #item-5:checked~.cards #circle-5 {
        transform: translateX(200%) scale(0.8);
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

    .overlay {
        position: absolute;
        top: 20%;
        left: 5%;
        display: flex;
        flex-direction: column;
        border-bottom: 5px solid #6E944A;
        border-top: 5px solid #6E944A;
        justify-content: flex-start;
        height: auto;
        width: 40%;
        align-items: left;
        color: white;
        font-size: 2rem;
        padding: 20px;
        background-color: rgba(0, 0, 0, 0.5);
        overflow-y: hidden;
    }

    .overlay_title {
        font-size: 32px;
        overflow-wrap: break-word;
    }

    .overlay_text {
        margin-left: 20px;
        font-size: 12px;
    }
</style>

<script>
    let currentIndex = 0;
    const slides = document.querySelectorAll('.slide-item');
    const totalSlides = slides.length;

    function prevSlide() {
        currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
        updateSlide();
    }

    function nextSlide() {
        currentIndex = (currentIndex + 1) % totalSlides;
        updateSlide();
    }

    function updateSlide() {
        for (let i = 0; i < slides.length; i++) {
            if (i === currentIndex) {
                slides[i].style.display = "block";
            } else {
                slides[i].style.display = "none";
            }
        }
        const attentionTitle = document.getElementById('attentionTitle');

        // Cambiamos el contenido del título según el índice actual del carrusel
        switch (currentIndex) {
            case 0:
                attentionTitle.textContent = "ATENCION AL SOCIO";
                break;
            case 1:
                attentionTitle.textContent = "SOY PERIODISTA";
                break;
            case 2:
                attentionTitle.textContent = "OTRAS CONSULTAS"
                break;
            case 3:
                attentionTitle.textContent = "SOLICITUD DE AYUDA";
                break;
            case 4:
                ;attentionTitle.textContent = "SOLICITAR TRABAJO";
                break;
            default:
                attentionTitle.textContent = "DEFAULT TÍTULO";
                break;
        }
        document.querySelectorAll('.cards input[type="radio"]').forEach(radio => {
            radio.checked = false;
        });
        document.getElementById(`item-${currentIndex + 1}`).checked = true;
    }

    function selectCard(index) {
        currentIndex = index;
        updateSlide();
        updateForm(index); // Agrega esta línea para actualizar el formulario al cambiar el carrusel

    }

    function updateForm(index) {
        // Oculta todos los formularios
        document.querySelectorAll('.contact-form').forEach(form => {
            form.style.display = 'none';
        });

        // Muestra el formulario correspondiente al índice seleccionado
        const formId = `form${index + 1}`;
        const selectedForm = document.getElementById(formId);
        if (selectedForm) {
            selectedForm.style.display = 'block';
        }
    }

    // Ejemplo de cómo podrías llamar a esta función cuando cambie el carrusel
    function onSelectSlide(index) {
        // Llama a la función para actualizar el formulario según el índice del carrusel
        updateForm(index);
    }

    updateSlide();
</script>
