    <h1 class="contact-form_title">SOLICITUD DE AYUDA</h1>
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