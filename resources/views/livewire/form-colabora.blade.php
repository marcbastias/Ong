<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Registro</title>
    <style>
        /* Estilos para los botones */
        .option {
            display: inline-block;
            padding: 12px 20px;
            background-color: #8AB469;
            color: white;
            cursor: pointer;
            border: 2px solid transparent;
            /* Añadir borde transparente */
            border-radius: 8px;
            margin-right: 10px;
        }

        /* Estilo para el botón seleccionado */
        .option.selected {
            border-color: white;
            /* Cambiar el color del borde al blanco */
            background-image: url('../assets/images/huella.png');
            /* Agregar la imagen de la huella */
            background-repeat: no-repeat;
            /* Evitar que se repita la imagen */
            background-position: right center;
            /* Posicionar la imagen a la derecha del botón */
            padding-right: 30px;
            /* Ajustar el espacio para la imagen */
        }

        /* Estilos para los campos de entrada */
        input[type="number"],
        input[type="email"],
        .range-input {
            width: calc(100% - 20px);
            /* Reducir el ancho en 20px para el borde */
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 15px;
            margin-bottom: 15px;
            font-size: 16px;
            transition: border-color 0.3s ease;
        }

        input[type="number"]:focus,
        input[type="email"]:focus,
        .range-input:focus {
            outline: none;
            border-color: #8AB469;
        }

        /* Estilo para las etiquetas */
        label,
        .range-label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: white;
        }

        /* Estilo para el botón de enviar */
        button[type="submit"] {
            display: block;
            width: 100%;
            padding: 15px;
            background-color: #8AB469;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button[type="submit"]:hover {
            background-color: #6e9741;
        }

        /* Estilos para la barra deslizante */
        .range-container {
            position: relative;
            margin-bottom: 30px; /* Aumentado el espacio superior */
        }

        .range-label {
            position: absolute;
            top: -35px;
            left: 50%;
            transform: translateX(-50%);
            text-align: center;
            font-size: 18px;
            color: white;
        }

        .range-input {
            width: 100%;
            -webkit-appearance: none;
            height: 15px;
            border-radius: 10px;
            background-color: #f0f0f0;
            outline: none;
            opacity: 0.7;
            transition: opacity 0.2s;
        }

        .range-input:hover {
            opacity: 1;
        }

        .range-input::-webkit-slider-thumb {
            -webkit-appearance: none;
            appearance: none;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background-color: #8AB469;
            cursor: pointer;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .range-input::-moz-range-thumb {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background-color: #8AB469;
            cursor: pointer;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>

    <div class="mt-80 flex justify-center items-center h-full">
        <div class="p-8 bg-[#A7DD7D] shadow-md" style="width: 800px;">
            <h1 class="text-white text-3xl font-bold mb-8 text-center">HAZTE SOCIO</h1>
            <div class="gap-28 p-5 mb-8 flex justify-center">
                <div>
                    <input type="radio" id="socio_adulto" name="tipo_socio" value="socio_adulto" class="mr-2 hidden"
                        onclick="handleButtonClick(this)">
                    <label for="socio_adulto" class="option">Socio Adulto</label>
                </div>
                <div>
                    <input type="radio" id="socio_menos" name="tipo_socio" value="socio_menos" class="ml-2 hidden"
                        onclick="handleButtonClick(this)">
                    <label for="socio_menos" class="option">Socio Menos</label>
                </div>
            </div>
            <hr class="my-8">
            <h3 class="text-white text-xl font-semibold mb-4">Tipo de Suscripción</h3>
            <div class="mb-8 flex justify-center gap-20">
                <input type="radio" id="mensual" name="tipo_suscripcion" value="mensual" class="mr-2 hidden"
                    onclick="handleButtonClick(this)">
                <label for="mensual" class="option">Mensual</label>
                <input type="radio" id="trimestral" name="tipo_suscripcion" value="trimestral" class="mr-2 hidden"
                    onclick="handleButtonClick(this)">
                <label for="trimestral" class="option">Trimestral</label>
                <input type="radio" id="anual" name="tipo_suscripcion" value="anual" class="ml-2 hidden"
                    onclick="handleButtonClick(this)">
                <label for="anual" class="option">Anual</label>
            </div>
            <br>
            <div class="range-container">
                <label for="cantidad" class="range-label">Cantidad a Donar: <span id="cantidad-value">$0</span></label>
                <input type="range" id="cantidad" name="cantidad" min="0" max="100" value="0" class="range-input" oninput="updateAmount()">
            </div>

            <hr class="my-8">
            <div class="mb-8 flex justify-center gap-28 p-4">
                <input type="radio" id="formato_digital" name="formato" value="digital" class="mr-2 hidden"
                    onclick="handleButtonClick(this)">
                <label for="formato_digital" class="option">Formato Digital</label>
                <input type="radio" id="formato_papel" name="formato" value="papel" class="ml-2 hidden"
                    onclick="handleButtonClick(this)">
                <label for="formato_papel" class="option">Formato Papel</label>
            </div>

            <label for="correo" class="text-white block mb-2">Correo Electrónico:</label>
            <input type="email" id="correo" name="correo" placeholder="Ingrese su correo electrónico" class="mb-8">
            
            <div class="mb-8">
                <input type="checkbox" id="proteccion_datos" name="proteccion_datos" class="mr-2">
                <label class="text-white" for="proteccion_datos">Acepto la protección de datos</label>
            </div>

            <button type="submit" class="py-4 px-32 bg-[#8AB469] text-white flex justify-center items-center mx-auto">Enviar</button>
        </div>
    </div>

    <script>
        // Función para manejar el clic en los botones
        function handleButtonClick(element) {
            // Obtener todos los botones con la clase "option" del mismo grupo
            var buttons = document.querySelectorAll('[name="' + element.name + '"]');

            // Desactivar la clase "selected" en todos los botones del mismo grupo
            buttons.forEach(button => {
                button.nextElementSibling.classList.remove('selected');
            });

            // Activar la clase "selected" solo en el botón clicado
            element.nextElementSibling.classList.add('selected');

            // Verificar que haya tres opciones seleccionadas
            var selectedOptions = document.querySelectorAll('.option.selected');
            if (selectedOptions.length > 3) {
                // Desactivar la clase "selected" en el primer botón seleccionado
                selectedOptions[0].classList.remove('selected');
            }
        }

        // Función para actualizar el valor de la cantidad a donar
        function updateAmount() {
            var rangeValue = document.getElementById('cantidad').value;
            document.getElementById('cantidad-value').textContent = "$" + rangeValue;
        }
    </script>

</body>

</html>
