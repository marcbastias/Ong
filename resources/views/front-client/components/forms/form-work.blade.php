<h1 class="contact-form_title">SOLICITUD DE TRABAJO EN UNA ONG</h1>
<h5 class="contact-form_subtitle">
    Si estás interesado en trabajar con nosotros y contribuir a nuestras causas, por favor, completa el siguiente formulario. Nuestro equipo revisará tu solicitud y se pondrá en contacto contigo lo antes posible. Asegúrate de adjuntar tu currículum y cualquier otro documento relevante. Si tienes alguna pregunta urgente, por favor, llámanos al teléfono (+34) 91 354 0578 en horario de lunes a jueves de 8 a 17.30h y los viernes de 8 a 14h.
</h5>

<form action="{{ route('contacto.work') }}" method="post" enctype="multipart/form-data"
    class="p-11 grid grid-cols-2 gap-4">
    @csrf
    <div class="form-group col-span-1">
        <label for="name">Nombre Completo</label>
        <input type="text"
            class="form-control border-2 border-customColor-principal bg-transparent p-2 w-full" id="name"
            name="name" required>
    </div>
    <div class="form-group col-span-1">
        <label for="email">Correo Electrónico</label>
        <input type="email" class="border-2 border-customColor-principal bg-transparent p-2 w-full"
            id="email" name="email" required>
    </div>
    <div class="form-group col-span-1">
        <label for="phone">Número de Teléfono</label>
        <input type="tel"
            class="form-control border-2 border-customColor-principal bg-transparent p-2 w-full"
            id="phone" name="phone" required>
    </div>
    <div class="form-group col-span-1">
        <label for="position">Selecciona el puesto al que deseas aplicar:</label>
    <select id="position" name="position" required>
        <option value="" disabled selected>Selecciona una opción</option>
        <option value="veterinario">Veterinario</option>
        <option value="tecnico_veterinario">Técnico Veterinario</option>
        <option value="especialista_bienestar_animal">Especialista en Bienestar Animal</option>
        <option value="encargado_refugio">Encargado de Refugio</option>
        <option value="cuidadores_animales">Cuidadores de Animales</option>
        <option value="adiestrador_animales">Adiestrador de Animales</option>
        <option value="especialista_adopciones">Especialista en Adopciones</option>
        <option value="coordinador_voluntarios">Coordinador de Voluntarios</option>
        <option value="responsable_comunicaciones">Responsable de Comunicaciones y Relaciones Públicas</option>
        <option value="responsable_recaudacion_fondos">Responsable de Recaudación de Fondos</option>
    </select>
    </div>
    <div class="form-group col-span-2">
        <label for="message">Cuéntanos sobre ti y por qué quieres trabajar con nosotros</label>
        <textarea class="form-control border-2 border-customColor-principal bg-transparent p-2 w-full" id="message"
            name="message" rows="4" required style="resize: none;"></textarea>
    </div>
    <div class="form-group col-span-2">
        <label for="cv_path">Adjuntar Currículum</label>
        <input type="file" class="form-control-file border-2 border-customColor-principal p-2 w-full"
            id="cv_path" name="cv_path" required accept=".pdf,.doc,.docx">
    </div>
    <div class="form-group col-span-2 grid grid-cols-2">
        <label for="privacy_policy" class="mb-2">Política de Privacidad</label>
        <input type="checkbox" class="form-check-input" id="privacy_policy" name="privacy_policy" required>
        <label class="form-check-label" for="privacy_policy">He leído y acepto la política de privacidad y términos y condiciones</label>
    </div>

    <div class="form-group col-span-2 flex justify-between items-end">
        <button type="submit"
            class="btn btn-primary border border-customColor-principal bg-customColor-principal pt-3 pb-3 pr-2 pl-2 font-bold text-md">ENVIAR</button>
    </div>
</form>
