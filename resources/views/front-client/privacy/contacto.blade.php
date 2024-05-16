<x-privacy-layout>
    <x-slot name="title">CONTACTA CON NOSOTROS</x-slot>
    <x-slot name="content">

</x-privacy-layout>
<div class="content-page">
    <h1 class="font-extrabold text-3xl mt-20">ELIJE LA PREFERENCIA DE FORMULARIO QUE NECESITES</h1>
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
                <img src="../assets/images/carrusel-img/animal1.png" alt="circle">
            </label>
            <label class="card" for="item-2" id="circle-2" onclick="selectCard(1)">
                <img src="../assets/images/carrusel-img/animal2.png" alt="circle">
            </label>
            <label class="card" for="item-3" id="circle-3" onclick="selectCard(2)">
                <img src="../assets/images/carrusel-img/animal3.png" alt="circle">
            </label>
            <label class="card" for="item-4" id="circle-4" onclick="selectCard(3)">
                <img src="../assets/images/carrusel-img/animal4.png" alt="circle">
            </label>
            <label class="card" for="item-5" id="circle-5" onclick="selectCard(4)">
                <img src="../assets/images/carrusel-img/animal5.png" alt="circle">
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
        ATENCION AL CLIENTE</div>
    <div id="form1"class="contact-form">
        <h1 class="contact-form_title">wow</h1>
        <h5 class="contact-form_subtitle">
            Si las personas y la naturaleza se ven afectadas, tenemos algo que decir. Puedes contactar con nosotros para
            ampliar información sobre los temas ambientales que preocupan a la sociedad. Nuestro equipo está disponible
            para comentarios, entrevistas e información. Si lo que quieres es utilizar alguna de nuestras fotografías o
            publicaciones, cuéntanos qué necesitas y para qué lo quieres usar. Envíanos tu consulta rellenando este
            formulario y nos pondremos en contacto contigo con la mayor brevedad posible. Si no puedes esperar, por
            favor, llámanos al teléfono (+34) 91 354 0578 en horario de lunes a jueves de 8 a 17.30h y los viernes de 8
            a 14h.
        </h5>

        <form action="{{ route('contacto.store') }}" method="post" enctype="multipart/form-data"
            class="p-11 grid grid-cols-2 gap-4">
            @csrf
            <div class="form-group col-span-1">
                <label for="name">¿Quien eres?</label>
                <input type="text"
                    class="form-control border-2 border-customColor-principal bg-transparent p-2 w-full" id="name"
                    name="name" required>
            </div>
            <div class="form-group col-span-1">
                <label for="media">¿En que medio trabajas?</label>
                <input type="text" class=" border-2 border-customColor-principal bg-transparent p-2 w-full"
                    id="media" name="media">
            </div>
            <div class="form-group col-span-1">
                <label for="email">Correo electronico</label>
                <input type="email"
                    class="form-control border-2 border-customColor-principal bg-transparent p-2 w-full" id="email"
                    name="email" required>
            </div>
            <div class="form-group col-span-1">
                <label for="phone">Telefono</label>
                <input type="tel"
                    class="form-control border-2 border-customColor-principal bg-transparent p-2 w-full"
                    id="phone" name="phone">
            </div>
            <div class="form-group col-span-2">
                <label for="message">¿Con que podemos ayudarte?</label>
                <textarea class="form-control border-2 border-customColor-principal bg-transparent p-2 w-full" id="message"
                    name="message" rows="4" style="resize: none;"></textarea>
            </div>
            <div class="form-group col-span-2">
                <label for="attachment">Archivos</label>
                <input type="file" class="form-control-file border-2 border-customColor-principal p-2 w-full"
                    id="attachment" name="attachment">
            </div>
            <div class="form-group col-span-2 grid grid-cols-2">
                <label for="privacy_policy" class="mb-2">Privacy Policy</label>
                <input type="checkbox" class="form-check-input" id="privacy_policy" name="privacy_policy" required>
                <label class="form-check-label" for="privacy_policy">I have read and accept the privacy policy and
                    terms and conditions</label>
            </div>

            <div class="form-group col-span-2 flex justify-between items-end">
                <button type="submit"
                    class="btn btn-primary border border-customColor-principal bg-customColor-principal pt-3 pb-3 pr-2 pl-2 font-bold text-md">ENVIAR</button>

            </div>
        </form>
    </div>

    <div id="form2"class="contact-form" style="display: none">
        <h1 class="contact-form_title">sergi</h1>
        <h5 class="contact-form_subtitle">
            Si las personas y la naturaleza se ven afectadas, tenemos algo que decir. Puedes contactar con nosotros para
            ampliar información sobre los temas ambientales que preocupan a la sociedad. Nuestro equipo está disponible
            para comentarios, entrevistas e información. Si lo que quieres es utilizar alguna de nuestras fotografías o
            publicaciones, cuéntanos qué necesitas y para qué lo quieres usar. Envíanos tu consulta rellenando este
            formulario y nos pondremos en contacto contigo con la mayor brevedad posible. Si no puedes esperar, por
            favor, llámanos al teléfono (+34) 91 354 0578 en horario de lunes a jueves de 8 a 17.30h y los viernes de 8
            a 14h.
        </h5>

        <form action="{{ route('contacto.store') }}" method="post" enctype="multipart/form-data"
            class="p-11 grid grid-cols-2 gap-4">
            @csrf
            <div class="form-group col-span-1">
                <label for="name">¿Quien eres?</label>
                <input type="text"
                    class="form-control border-2 border-customColor-principal bg-transparent p-2 w-full"
                    id="name" name="name" required>
            </div>
            <div class="form-group col-span-1">
                <label for="media">¿En que medio trabajas?</label>
                <input type="text" class=" border-2 border-customColor-principal bg-transparent p-2 w-full"
                    id="media" name="media">
            </div>
            <div class="form-group col-span-1">
                <label for="email">Correo electronico</label>
                <input type="email"
                    class="form-control border-2 border-customColor-principal bg-transparent p-2 w-full"
                    id="email" name="email" required>
            </div>
            <div class="form-group col-span-1">
                <label for="phone">Telefono</label>
                <input type="tel"
                    class="form-control border-2 border-customColor-principal bg-transparent p-2 w-full"
                    id="phone" name="phone">
            </div>
            <div class="form-group col-span-2">
                <label for="message">¿Con que podemos ayudarte?</label>
                <textarea class="form-control border-2 border-customColor-principal bg-transparent p-2 w-full" id="message"
                    name="message" rows="4" style="resize: none;"></textarea>
            </div>
            <div class="form-group col-span-2">
                <label for="attachment">Archivos</label>
                <input type="file" class="form-control-file border-2 border-customColor-principal p-2 w-full"
                    id="attachment" name="attachment">
            </div>
            <div class="form-group col-span-2 grid grid-cols-2">
                <label for="privacy_policy" class="mb-2">Privacy Policy</label>
                <input type="checkbox" class="form-check-input" id="privacy_policy" name="privacy_policy" required>
                <label class="form-check-label" for="privacy_policy">I have read and accept the privacy policy and
                    terms and conditions</label>
            </div>

            <div class="form-group col-span-2 flex justify-between items-end">
                <button type="submit"
                    class="btn btn-primary border border-customColor-principal bg-customColor-principal pt-3 pb-3 pr-2 pl-2 font-bold text-md">ENVIAR</button>

            </div>
        </form>
    </div>
    <div id="form3"class="contact-form" style="display: none">
        <h1 class="contact-form_title">Formulario 4</h1>
        <h5 class="contact-form_subtitle">
            Si las personas y la naturaleza se ven afectadas, tenemos algo que decir. Puedes contactar con nosotros para
            ampliar información sobre los temas ambientales que preocupan a la sociedad. Nuestro equipo está disponible
            para comentarios, entrevistas e información. Si lo que quieres es utilizar alguna de nuestras fotografías o
            publicaciones, cuéntanos qué necesitas y para qué lo quieres usar. Envíanos tu consulta rellenando este
            formulario y nos pondremos en contacto contigo con la mayor brevedad posible. Si no puedes esperar, por
            favor, llámanos al teléfono (+34) 91 354 0578 en horario de lunes a jueves de 8 a 17.30h y los viernes de 8
            a 14h.
        </h5>

        <form action="{{ route('contacto.store') }}" method="post" enctype="multipart/form-data"
            class="p-11 grid grid-cols-2 gap-4">
            @csrf
            <div class="form-group col-span-1">
                <label for="name">¿Quien eres?</label>
                <input type="text"
                    class="form-control border-2 border-customColor-principal bg-transparent p-2 w-full"
                    id="name" name="name" required>
            </div>
            <div class="form-group col-span-1">
                <label for="media">¿En que medio trabajas?</label>
                <input type="text" class=" border-2 border-customColor-principal bg-transparent p-2 w-full"
                    id="media" name="media">
            </div>
            <div class="form-group col-span-1">
                <label for="email">Correo electronico</label>
                <input type="email"
                    class="form-control border-2 border-customColor-principal bg-transparent p-2 w-full"
                    id="email" name="email" required>
            </div>
            <div class="form-group col-span-1">
                <label for="phone">Telefono</label>
                <input type="tel"
                    class="form-control border-2 border-customColor-principal bg-transparent p-2 w-full"
                    id="phone" name="phone">
            </div>
            <div class="form-group col-span-2">
                <label for="message">¿Con que podemos ayudarte?</label>
                <textarea class="form-control border-2 border-customColor-principal bg-transparent p-2 w-full" id="message"
                    name="message" rows="4" style="resize: none;"></textarea>
            </div>
            <div class="form-group col-span-2">
                <label for="attachment">Archivos</label>
                <input type="file" class="form-control-file border-2 border-customColor-principal p-2 w-full"
                    id="attachment" name="attachment">
            </div>
            <div class="form-group col-span-2 grid grid-cols-2">
                <label for="privacy_policy" class="mb-2">Privacy Policy</label>
                <input type="checkbox" class="form-check-input" id="privacy_policy" name="privacy_policy" required>
                <label class="form-check-label" for="privacy_policy">I have read and accept the privacy policy and
                    terms and conditions</label>
            </div>

            <div class="form-group col-span-2 flex justify-between items-end">
                <button type="submit"
                    class="btn btn-primary border border-customColor-principal bg-customColor-principal pt-3 pb-3 pr-2 pl-2 font-bold text-md">ENVIAR</button>

            </div>
        </form>
    </div>

    <div id="form4"class="contact-form" style="display: none">
        <h1 class="contact-form_title">Formulario 2</h1>
        <h5 class="contact-form_subtitle">
            Si las personas y la naturaleza se ven afectadas, tenemos algo que decir. Puedes contactar con nosotros para
            ampliar información sobre los temas ambientales que preocupan a la sociedad. Nuestro equipo está disponible
            para comentarios, entrevistas e información. Si lo que quieres es utilizar alguna de nuestras fotografías o
            publicaciones, cuéntanos qué necesitas y para qué lo quieres usar. Envíanos tu consulta rellenando este
            formulario y nos pondremos en contacto contigo con la mayor brevedad posible. Si no puedes esperar, por
            favor, llámanos al teléfono (+34) 91 354 0578 en horario de lunes a jueves de 8 a 17.30h y los viernes de 8
            a 14h.
        </h5>

        <form action="{{ route('contacto.store') }}" method="post" enctype="multipart/form-data"
            class="p-11 grid grid-cols-2 gap-4">
            @csrf
            <div class="form-group col-span-1">
                <label for="name">¿Quien eres?</label>
                <input type="text"
                    class="form-control border-2 border-customColor-principal bg-transparent p-2 w-full"
                    id="name" name="name" required>
            </div>
            <div class="form-group col-span-1">
                <label for="media">¿En que medio trabajas?</label>
                <input type="text" class=" border-2 border-customColor-principal bg-transparent p-2 w-full"
                    id="media" name="media">
            </div>
            <div class="form-group col-span-1">
                <label for="email">Correo electronico</label>
                <input type="email"
                    class="form-control border-2 border-customColor-principal bg-transparent p-2 w-full"
                    id="email" name="email" required>
            </div>
            <div class="form-group col-span-1">
                <label for="phone">Telefono</label>
                <input type="tel"
                    class="form-control border-2 border-customColor-principal bg-transparent p-2 w-full"
                    id="phone" name="phone">
            </div>
            <div class="form-group col-span-2">
                <label for="message">¿Con que podemos ayudarte?</label>
                <textarea class="form-control border-2 border-customColor-principal bg-transparent p-2 w-full" id="message"
                    name="message" rows="4" style="resize: none;"></textarea>
            </div>
            <div class="form-group col-span-2">
                <label for="attachment">Archivos</label>
                <input type="file" class="form-control-file border-2 border-customColor-principal p-2 w-full"
                    id="attachment" name="attachment">
            </div>
            <div class="form-group col-span-2 grid grid-cols-2">
                <label for="privacy_policy" class="mb-2">Privacy Policy</label>
                <input type="checkbox" class="form-check-input" id="privacy_policy" name="privacy_policy" required>
                <label class="form-check-label" for="privacy_policy">I have read and accept the privacy policy and
                    terms and conditions</label>
            </div>

            <div class="form-group col-span-2 flex justify-between items-end">
                <button type="submit"
                    class="btn btn-primary border border-customColor-principal bg-customColor-principal pt-3 pb-3 pr-2 pl-2 font-bold text-md">ENVIAR</button>

            </div>
        </form>
    </div>

    <div id="form5"class="contact-form" style="display: none">
        <h1 class="contact-form_title">SOY PERIODISTA</h1>
        <h5 class="contact-form_subtitle">
            Si las personas y la naturaleza se ven afectadas, tenemos algo que decir. Puedes contactar con nosotros para
            ampliar información sobre los temas ambientales que preocupan a la sociedad. Nuestro equipo está disponible
            para comentarios, entrevistas e información. Si lo que quieres es utilizar alguna de nuestras fotografías o
            publicaciones, cuéntanos qué necesitas y para qué lo quieres usar. Envíanos tu consulta rellenando este
            formulario y nos pondremos en contacto contigo con la mayor brevedad posible. Si no puedes esperar, por
            favor, llámanos al teléfono (+34) 91 354 0578 en horario de lunes a jueves de 8 a 17.30h y los viernes de 8
            a 14h.
        </h5>

        <form action="{{ route('contacto.store') }}" method="post" enctype="multipart/form-data"
            class="p-11 grid grid-cols-2 gap-4">
            @csrf
            <div class="form-group col-span-1">
                <label for="name">¿Quien eres?</label>
                <input type="text"
                    class="form-control border-2 border-customColor-principal bg-transparent p-2 w-full"
                    id="name" name="name" required>
            </div>
            <div class="form-group col-span-1">
                <label for="media">¿En que medio trabajas?</label>
                <input type="text" class=" border-2 border-customColor-principal bg-transparent p-2 w-full"
                    id="media" name="media">
            </div>
            <div class="form-group col-span-1">
                <label for="email">Correo electronico</label>
                <input type="email"
                    class="form-control border-2 border-customColor-principal bg-transparent p-2 w-full"
                    id="email" name="email" required>
            </div>
            <div class="form-group col-span-1">
                <label for="phone">Telefono</label>
                <input type="tel"
                    class="form-control border-2 border-customColor-principal bg-transparent p-2 w-full"
                    id="phone" name="phone">
            </div>
            <div class="form-group col-span-2">
                <label for="message">¿Con que podemos ayudarte?</label>
                <textarea class="form-control border-2 border-customColor-principal bg-transparent p-2 w-full" id="message"
                    name="message" rows="4" style="resize: none;"></textarea>
            </div>
            <div class="form-group col-span-2">
                <label for="attachment">Archivos</label>
                <input type="file" class="form-control-file border-2 border-customColor-principal p-2 w-full"
                    id="attachment" name="attachment">
            </div>
            <div class="form-group col-span-2 grid grid-cols-2">
                <label for="privacy_policy" class="mb-2">Privacy Policy</label>
                <input type="checkbox" class="form-check-input" id="privacy_policy" name="privacy_policy" required>
                <label class="form-check-label" for="privacy_policy">I have read and accept the privacy policy and
                    terms and conditions</label>
            </div>

            <div class="form-group col-span-2 flex justify-between items-end">
                <button type="submit"
                    class="btn btn-primary border border-customColor-principal bg-customColor-principal pt-3 pb-3 pr-2 pl-2 font-bold text-md">ENVIAR</button>

            </div>
        </form>
    </div>
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
                attentionTitle.textContent = "ATENCION AL CLIENTE";
                break;
            case 1:
                attentionTitle.textContent = "SOY PERIODISTA";
                break;
            case 2:
                attentionTitle.textContent = "OTRO TÍTULO 2";
                break;
            case 3:
                attentionTitle.textContent = "QUIERO SER VOLUNTARIO";
                break;
            case 4:
                attentionTitle.textContent = "OTRAS CONSULTAS";
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
