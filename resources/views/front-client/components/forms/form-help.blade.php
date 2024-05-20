<h1 class="contact-form_title">SOLICITUD DE AYUDA PARA ANIMALES EN PELIGRO</h1>
<h5 class="contact-form_subtitle">
    Si encuentras un animal en peligro o que necesita asistencia, por favor, completa el siguiente formulario. Nuestro equipo revisará tu solicitud y se pondrá en contacto contigo lo antes posible. Si la situación es urgente, por favor, llámanos al teléfono (+34) 91 354 0578 en horario de lunes a jueves de 8 a 17.30h y los viernes de 8 a 14h.
</h5>

<form action="{{ route('contacto.help') }}" method="post" enctype="multipart/form-data" class="p-11 grid grid-cols-2 gap-4">
    @csrf
    <div class="form-group col-span-1">
        <label for="name">Nombre Completo</label>
        <input type="text" class="form-control border-2 border-customColor-principal bg-transparent p-2 w-full" id="name" name="name" required>
    </div>
    <div class="form-group col-span-1">
        <label for="email">Correo Electrónico</label>
        <input type="email" class="form-control border-2 border-customColor-principal bg-transparent p-2 w-full" id="email" name="email" required>
    </div>
    <div class="form-group col-span-1">
        <label for="phone">Número de Teléfono</label>
        <input type="tel" class="form-control border-2 border-customColor-principal bg-transparent p-2 w-full" id="phone" name="phone" required>
    </div>
    <div class="form-group col-span-1">
        <label for="animal-type">Tipo de Animal</label>
        <input type="text" class="form-control border-2 border-customColor-principal bg-transparent p-2 w-full" id="animal-type" name="animal_type" required>
    </div>
    <div class="form-group col-span-2">
        <label for="location">Ubicación del Animal</label>
        <input type="text" class="form-control border-2 border-customColor-principal bg-transparent p-2 w-full" id="location" name="location" required>
    </div>
    <div class="form-group col-span-2">
        <label for="description">Descripción del Problema</label>
        <textarea class="form-control border-2 border-customColor-principal bg-transparent p-2 w-full" id="description" name="description" rows="4" required style="resize: none;"></textarea>
    </div>
    <div class="form-group col-span-2">
        <label for="urgency">Nivel de Urgencia</label>
        <select class="form-control border-2 border-customColor-principal bg-transparent p-2 w-full" id="urgency" name="urgency" required>
            <option value="low">Bajo</option>
            <option value="medium">Medio</option>
            <option value="high">Alto</option>
        </select>
    </div>
    <div class="form-group col-span-2">
        <label for="photo">Subir Foto (Opcional)</label>
        <input type="file" class="form-control-file border-2 border-customColor-principal p-2 w-full" id="photo" name="photo" accept="image/*">
    </div>
    <div class="form-group col-span-2 grid grid-cols-2">
        <label for="privacy_policy" class="mb-2">Política de Privacidad</label>
        <input type="checkbox" class="form-check-input" id="privacy_policy" name="privacy_policy" required>
        <label class="form-check-label" for="privacy_policy">He leído y acepto la política de privacidad y términos y condiciones</label>
    </div>

    <div class="form-group col-span-2 flex justify-between items-end">
        <button type="submit" class="btn btn-primary border border-customColor-principal bg-customColor-principal pt-3 pb-3 pr-2 pl-2 font-bold text-md">ENVIAR</button>
    </div>
</form>
