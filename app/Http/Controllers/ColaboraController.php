<?php

namespace App\Http\Controllers;

class ColaboraController extends Controller
{
    public function adopta()
    {
        $titulo = 'AYÚDANOS A DARLES UN HOGAR Y CAMBIAR SUS VIDAS';


        $texto = 'Con una sola contribución , puedes apoyar nuestra misión de brindar un hogar seguro y amoroso a animales en situación de vulnerabilidad. 
        Al participar en nuestra adopción simbólica, recibirás un paquete especial con detalles sobre el animal, su historia y cómo tu ayuda marca la diferencia en su vida. 
        Únete a nuestra causa y sé parte del cambio positivo en la vida de estos animales.';
        
        // imagen
        $imagen = '../assets/images/loro.webp';

        $segundoTitulo = 'ANIMALES CON LOS QUE COLABORAMOS';

          // Datos para el carrusel grande
    $imagen1 = asset('assets/images/carrusel-img/chimpanceGrande.jpg'); // 1
    $titulo1 = 'Adopta un chimpancé, es parte de nuestro árbol familiar ';
    $texto1 = 'Inteligente y sociable, compartimos con él un 98% de nuestro ADN. ';

    $imagen2 = asset('assets/images/carrusel-img/delfinGrande.jpg'); //4
    $titulo2 = 'Adopta un delfín, por un santuario de cetáceos en Canarias ';
    $texto2 = 'Frente a Lanzarote y Fuerteventura vive un tercio de los cetáceos del
    planeta.';

    $imagen3 = asset('assets/images/carrusel-img/elefanteGrande.jpg');
    $titulo3 = 'Adopta un elefante para detener el tráfico ilegal de marfil ';
    $texto3 = 'Cada 15 minutos un elefante es asesinado para vender su marfil. ';

    $imagen4 = asset('assets/images/carrusel-img/focaGrande.jpg'); // 2---------
    $titulo4 = 'Adopta una foca, nuestro futuro depende de su bienestar ';
    $texto4 = 'Debido al deshielo, muchas crías de focas mueren al zambullirse en el
    mar antes de almacenar la grasa que las proteja del frío. ';

    $imagen5 = asset('assets/images/carrusel-img/orangutanGrande.jpg'); //33333
    $titulo5 = 'Adopta un orangután, el hombre del bosque tropical ';
    $texto5 = 'Hace un siglo cientos de miles de orangutanes abrazaban las selvas del
    Sudeste Asiático. ';

    // Datos para el carrusel pequeño
    $imagenCirculo1 = asset('assets/images/carrusel-img/foca.jpg'); // 2---------
    $imagenCirculo2 = asset('assets/images/carrusel-img/orangutan.jpg'); //33333
    $imagenCirculo3 = asset('assets/images/carrusel-img/chimpance.jpg'); // 1
    $imagenCirculo4 = asset('assets/images/carrusel-img/delfin.jpg'); //4
    $imagenCirculo5 = asset('assets/images/carrusel-img/elefante.jpg');

    return view('layouts.ayudas', compact(
        'titulo',
        'texto',
        'imagen',
        'segundoTitulo',
        'imagen1',
        'titulo1',
        'texto1',
        'imagen2',
        'titulo2',
        'texto2',
        'imagen3',
        'titulo3',
        'texto3',
        'imagen4',
        'titulo4',
        'texto4',
        'imagen5',
        'titulo5',
        'texto5',
        'imagenCirculo1',
        'imagenCirculo2',
        'imagenCirculo3',
        'imagenCirculo4',
        'imagenCirculo5'
    ));
    }

    public function animalesAmenazados()
    {
        $titulo = 'AYÚDANOS A PROTEGER A LOS ANIMALES AMENAZADOS';

        $texto = 'Únete a nuestra organización para salvar a los animales en peligro de extinción. 
        Con tu apoyo, podemos implementar proyectos de conservación vitales para proteger especies 
        amenazadas y sus hábitats en todo el mundo. Al contribuir, estás ayudando a salvar animales 
        como el tigre de Bengala, el rinoceronte negro y muchas otras especies. Juntos, podemos hacer 
        una gran diferencia. ¡Contamos contigo para proteger a estas criaturas increíbles!';

        // imagen
        $imagen = '../assets/images/nutria.png';

        $segundoTitulo = 'ANIMALES EN PELIGRO DE EXTINCIÓN';
        
        $imagen1 = asset('assets/images/carrusel-img/animalesAmenazados/jaguarGrande.jpg'); // 1
        $titulo1 = 'Guardián de la Selva';
        $texto1 = 'IEl majestuoso jaguar, conocido por su fuerza y agilidad, enfrenta la amenaza de la deforestación y la caza furtiva. Su hábitat en las selvas de América Latina se reduce cada año, poniendo en peligro su supervivencia.';
    
        $imagen2 = asset('assets/images/carrusel-img/animalesAmenazados/leonGrande.jpg'); //4
        $titulo2 = 'Rey en Peligro';
        $texto2 = 'El rey de la selva está en peligro. La disminución de sus presas naturales y el conflicto con humanos han llevado a los leones africanos a un alarmante declive poblacional, requiriendo acciones urgentes para su conservación.';
    
        $imagen3 = asset('assets/images/carrusel-img/animalesAmenazados/pandaGrande.jpg');
        $titulo3 = 'Ícono Vulnerable';
        $texto3 = 'Este icónico símbolo de la conservación enfrenta un futuro incierto. La pérdida de su hábitat debido a la expansión agrícola en China pone en riesgo a los pandas gigantes, aunque los esfuerzos de conservación están mostrando signos de esperanza.';
    
        $imagen4 = asset('assets/images/carrusel-img/animalesAmenazados/rayasGrande.jpg'); // 2---------
        $titulo4 = 'Gracia en Riesgo';
        $texto4 = 'Las mantarrayas, con sus gráciles movimientos en los océanos, están amenazadas por la pesca excesiva y la degradación de los arrecifes. La falta de regulación en la pesca pone a estas impresionantes criaturas en peligro.';
    
        $imagen5 = asset('assets/images/carrusel-img/animalesAmenazados/tiburonesGrande.jpg'); //33333
        $titulo5 = 'Guardianes del Océano Amenazados';
        $texto5 = 'Tiburones: Los tiburones, esenciales para el equilibrio de los ecosistemas marinos, sufren una drástica disminución debido a la pesca intensiva y la demanda de sus aletas. La protección de estas especies es crucial para mantener la salud de los océanos.';
    
        // Datos para el carrusel pequeño
        $imagenCirculo1 = asset('assets/images/carrusel-img/animalesAmenazados/rayas.jpg'); // 2---------
        $imagenCirculo2 = asset('assets/images/carrusel-img/animalesAmenazados/tiburones.jpg'); //33333
        $imagenCirculo3 = asset('assets/images/carrusel-img/animalesAmenazados/jaguar.jpg'); // 1
        $imagenCirculo4 = asset('assets/images/carrusel-img/animalesAmenazados/leon.jpg'); //4
        $imagenCirculo5 = asset('assets/images/carrusel-img/animalesAmenazados/panda.jpg');
    
        return view('layouts.ayudas', compact(
            'titulo',
            'texto',
            'imagen',
            'segundoTitulo',
            'imagen1',
            'titulo1',
            'texto1',
            'imagen2',
            'titulo2',
            'texto2',
            'imagen3',
            'titulo3',
            'texto3',
            'imagen4',
            'titulo4',
            'texto4',
            'imagen5',
            'titulo5',
            'texto5',
            'imagenCirculo1',
            'imagenCirculo2',
            'imagenCirculo3',
            'imagenCirculo4',
            'imagenCirculo5'
        ));}

    public function animalesExplotados()
    {
        $titulo = 'AYÚDANOS A DETENER LA EXPLOTACIÓN ANIMAL';

        $texto = 'Únete a nuestra causa para acabar con la explotación animal. Con tu apoyo, podemos 
        luchar contra la crueldad y el maltrato que sufren millones de animales en todo el mundo. 
        Trabajamos incansablemente para rescatar y rehabilitar animales explotados en circos, granjas industriales, 
        y otros entornos abusivos. Al contribuir, estás ayudando a ofrecerles una vida digna y libre de sufrimiento. 
        ¡Contamos contigo para darles una voz y cambiar sus vidas!';

        // imagen
        $imagen = '../assets/images/tigre.jpg';

        $segundoTitulo = 'ANIMALES EN PELIGRO DE EXPLOTACIÓN';

        $imagen1 = asset('assets/images/carrusel-img/animalesExplotados/elefanteGrande.jpg'); // 1
    $titulo1 = 'Víctima de la Caza Furtiva';
    $texto1 = 'La majestuosidad del elefante africano es empañada por la brutalidad de la caza furtiva. Sus colmillos son codiciados por el comercio ilegal de marfil, dejando a estas criaturas icónicas al borde de la extinción.';

    $imagen2 = asset('assets/images/carrusel-img/animalesExplotados/rinoceronteGrande.jpg'); //4
    $titulo2 = 'Asediado por su Cuerno';
    $texto2 = 'El valioso cuerno del rinoceronte lo ha convertido en blanco de la caza ilegal. A pesar de los esfuerzos de conservación, la demanda persistente de cuerno de rinoceronte sigue diezmando sus poblaciones en la naturaleza.';

    $imagen3 = asset('assets/images/carrusel-img/animalesExplotados/tigreGrande.jpg');
    $titulo3 = 'Cautiverio y Comercio';
    $texto3 = 'El tigre de Bengala, símbolo de fuerza y elegancia, sufre en manos de la explotación humana. La deforestación de su hábitat y el comercio ilegal de partes de su cuerpo amenazan con extinguir esta emblemática especie.';

    $imagen4 = asset('assets/images/carrusel-img/animalesExplotados/ballenaGrande.jpg'); // 2---------
    $titulo4 = 'Caza Comercial Despiadada';
    $texto4 = 'La ballena azul, el mamífero más grande del planeta, ha sido cazada casi hasta la extinción por su valiosa grasa y carne. A pesar de las prohibiciones internacionales, la caza comercial ilegal sigue siendo una amenaza constante.';

    $imagen5 = asset('assets/images/carrusel-img/animalesExplotados/OrangutanGrande.jpg'); //33333
    $titulo5 = 'Perdido en la Selva de Aceite de Palma';
    $texto5 = 'El orangután de Borneo lucha por sobrevivir en un paisaje dominado por plantaciones de aceite de palma. La deforestación implacable de su hábitat natural lo deja vulnerable a la extinción, mientras la demanda de aceite de palma sigue en aumento.';

    // Datos para el carrusel pequeño
    $imagenCirculo1 = asset('assets/images/carrusel-img/animalesExplotados/ballena.jpg'); // 2---------
    $imagenCirculo2 = asset('assets/images/carrusel-img/animalesExplotados/Orangutan.jpg'); //33333
    $imagenCirculo3 = asset('assets/images/carrusel-img/animalesExplotados/elefante.jpg'); // 1
    $imagenCirculo4 = asset('assets/images/carrusel-img/animalesExplotados/rinoceronte.jpg'); //4
    $imagenCirculo5 = asset('assets/images/carrusel-img/animalesExplotados/tigre.jpg');

    return view('layouts.ayudas', compact(
        'titulo',
        'texto',
        'imagen',
        'segundoTitulo',
        'imagen1',
        'titulo1',
        'texto1',
        'imagen2',
        'titulo2',
        'texto2',
        'imagen3',
        'titulo3',
        'texto3',
        'imagen4',
        'titulo4',
        'texto4',
        'imagen5',
        'titulo5',
        'texto5',
        'imagenCirculo1',
        'imagenCirculo2',
        'imagenCirculo3',
        'imagenCirculo4',
        'imagenCirculo5'
    ));}
}
