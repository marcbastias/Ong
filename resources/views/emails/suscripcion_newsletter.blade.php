<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            background-color: #f6f6f6;
            font-family: Arial, sans-serif;
        }

        .container {
            background-color: #8AB469;
            padding: 20px;
            width: 100%;
            box-sizing: border-box;
            color: white;
        }

        .content {
            max-width: 600px;
            margin: auto;
        }

        .text-white {
            color: white;
        }

        .font-bold {
            font-weight: bold;
        }

        .text-center {
            text-align: center;
        }

        .text-3xl {
            font-size: 1.75rem;
        }

        .mb-16 {
            margin-bottom: 4rem;
        }

        .mb-8 {
            margin-bottom: 2rem;
        }

        .mb-4 {
            margin-bottom: 1rem;
        }

        .w-full {
            width: 100%;
        }

        .img-container {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 2rem;
        }

        .img-container img {
            width: 30%;
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="content">
            <h1 class="text-white text-3xl font-bold mb-16 text-center">¡Bienvenido a nuestra ONG!</h1>
            <p class="text-white text-center mb-8">Hola {{ $data['nombres'] }},</p>
            <p class="text-white text-center mb-8">Gracias por suscribirte a nuestro newsletter. Estamos emocionados de
                que te unas a nosotros en nuestra misión de proteger la naturaleza y salvar a los animales en peligro.
            </p>
            <p class="text-white text-center mb-8">Nuestra organización se dedica a:</p>
            <ul class="text-white mb-16">
                <li class="mb-4">Preservar hábitats naturales</li>
                <li class="mb-4">Proteger especies en peligro de extinción</li>
                <li class="mb-4">Promover la sostenibilidad ambiental</li>
            </ul>
            <p class="text-white text-center mb-8">A continuación, te mostramos algunas imágenes de nuestro trabajo:
            </p>
            <div class="img-container">
                <img src="https://blog.edufors.com/wp-content/uploads/2018/04/AlertaAnimales.jpg" alt="Imagen 1">
                <img src="https://content.nationalgeographic.com.es/medio/2024/04/18/el-panda-gigante-una-historia-de-exito_00000000_1ad5e36d_240418094610_1280x1280.jpg"
                    alt="Imagen 2">
                <img src="https://content.nationalgeographic.com.es/medio/2018/03/23/slipping-away_080b3155.jpg"
                    alt="Imagen 3">
            </div>
            <p class="text-white text-center mb-8">Gracias por tu apoyo. Juntos, podemos hacer una gran diferencia.</p>
            <p class="text-white text-center">Saludos,<br>El equipo de la ONG</p>
        </div>
    </div>
</body>

</html>
