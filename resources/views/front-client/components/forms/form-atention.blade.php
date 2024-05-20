<h1 class="contact-form_title">ATENCION AL SOCIO</h1>
<h5 class="contact-form_subtitle">
    En primer lugar, te damos la bienvenida y las gracias por tu apoyo y confianza en WWF España. Estamos aquí para ayudarte. ¿Qué necesitas? Envíanos tu consulta rellenando este formulario y nos pondremos en contacto contigo con la mayor brevedad posible. Si no puedes esperar, por favor, llámanos al teléfono (+34) 91 354 0578, en horario de lunes a jueves de 8 a 17.30h y los viernes de 8 a 14h. De nuevo gracias por tu apoyo.
</h5>

<form action="{{ route('contacto.attention') }}" method="post" enctype="multipart/form-data" class="p-11 grid grid-cols-2 gap-4">
    @csrf
    <div class="form-group col-span-1">
        <label for="first_name">Nombre*(required)</label>
        <input type="text" class="form-control border-2 border-customColor-principal bg-transparent p-2 w-full" id="first_name" name="first_name" required>
    </div>
    <div class="form-group col-span-1">
        <label for="last_name">Apellidos*(required)</label>
        <input type="text" class="form-control border-2 border-customColor-principal bg-transparent p-2 w-full" id="last_name" name="last_name" required>
    </div>
    <div class="form-group col-span-1">
        <label for="phone">Teléfono</label>
        <input type="tel" class="form-control border-2 border-customColor-principal bg-transparent p-2 w-full" id="phone" name="phone">
    </div>
    <div class="form-group col-span-1">
        <label for="email">Email*(required)</label>
        <input type="email" class="form-control border-2 border-customColor-principal bg-transparent p-2 w-full" id="email" name="email" required>
    </div>
    <div class="form-group col-span-1">
        <label for="member_number">Nº de socio</label>
        <input type="text" class="form-control border-2 border-customColor-principal bg-transparent p-2 w-full" id="member_number" name="member_number">
    </div>
    <div class="form-group col-span-2">
        <label for="message">¿En qué podemos ayudarte? Déjanos tu mensaje:*(required)</label>
        <textarea class="form-control border-2 border-customColor-principal bg-transparent p-2 w-full" id="message" name="message" rows="4" style="resize: none;" required></textarea>
    </div>
    <div class="form-group col-span-2">
        <label for="privacy_policy" class="mb-2">Protección de datos y política de privacidad*(required)</label>
        <input type="checkbox" class="form-check-input" id="privacy_policy" name="privacy_policy" required>
        <label class="form-check-label" for="privacy_policy">He leído y acepto la política de privacidad de WWF España. Queremos informarte sobre el uso y tratamiento que tendrán los datos que nos proporcionas. Es importante que las leas y comprendas este texto. Para poder inscribirte, debes aceptar la política de protección de datos de WWF España. <a href="https://www.wwf.es/privacidad" target="_blank">wwf.es/privacidad</a></label>
    </div>
    <div class="form-group col-span-2 flex justify-between items-end">
        <button type="submit" class="btn btn-primary border border-customColor-principal bg-customColor-principal pt-3 pb-3 pr-2 pl-2 font-bold text-md">ENVIAR</button>
    </div>
</form>
