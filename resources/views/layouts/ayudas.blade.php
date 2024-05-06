<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Aplicación</title>
    <!-- Aquí puedes agregar tus enlaces CSS -->
    <style>
        .animal-section {
            display: flex;
            align-items: center;
        }

        .animal-image {
            width: 50%;
            float: left;
            margin-right: 20px;
        }

        .animal-content {
            width: 50%;
        }

        .carousel-section {
            /* Estilos para el carrusel */
        }

        .form-section {
            /* Estilos para el formulario */
        }
    </style>
</head>
<body>
    <!-- Encabezado común -->
    <header>
        <!-- Incluir el componente de navegación -->
        @include('partials.navigation')
    </header>

    <!-- Contenido de la página -->
    <div class="container">
        <!-- El contenido de la página se insertará aquí -->
        @yield('content')
    </div>

    <!-- Pie de página común -->
    <footer>
        <!-- Contenido del footer -->
    </footer>

    <!-- Scripts JavaScript -->
</body>
</html>
