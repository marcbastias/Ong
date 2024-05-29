<?php

namespace App\Http\Controllers;

class ColaboraController extends Controller
{
    public function adopta()
    {
        $titulo = 'AYÚDANOS A <span class="text-conservar-verde">DARLES UN HOGAR</span> Y CAMBIAR SUS VIDAS';


        $texto = 'Con una sola contribución , puedes apoyar nuestra misión de brindar un hogar seguro y amoroso a animales en situación de vulnerabilidad. 
        Al participar en nuestra adopción simbólica, recibirás un paquete especial con detalles sobre el animal, su historia y cómo tu ayuda marca la diferencia en su vida. 
        Únete a nuestra causa y sé parte del cambio positivo en la vida de estos animales.';
        
        // imagen
        $imagen = '../assets/images/loro.webp';

        $segundoTitulo = 'ANIMALES CON LOS QUE COLABORAMOS';

        return view('front-client.colabora', compact('titulo', 'texto', 'imagen', 'segundoTitulo'));
    }

    public function animalesAmenazados()
    {
        $titulo = 'AYÚDANOS A <span class="text-conservar-rojo">PROTEGER</span> A LOS ANIMALES AMENAZADOS';

        $texto = 'Únete a nuestra organización para salvar a los animales en peligro de extinción. 
        Con tu apoyo, podemos implementar proyectos de conservación vitales para proteger especies 
        amenazadas y sus hábitats en todo el mundo. Al contribuir, estás ayudando a salvar animales 
        como el tigre de Bengala, el rinoceronte negro y muchas otras especies. Juntos, podemos hacer 
        una gran diferencia. ¡Contamos contigo para proteger a estas criaturas increíbles!';

        // imagen
        $imagen = '../assets/images/nutria.png';

        $segundoTitulo = 'ANIMALES EN PELIGRO DE EXTINCIÓN';

        return view('front-client.animalesAmenazados', compact('titulo', 'texto', 'imagen', 'segundoTitulo'));
    }

    public function animalesExplotados()
    {
        $titulo = 'AYÚDANOS A <span class="text-conservar-rojo">DETENER</span> LA EXPLOTACIÓN ANIMAL';

        $texto = 'Únete a nuestra causa para acabar con la explotación animal. Con tu apoyo, podemos 
        luchar contra la crueldad y el maltrato que sufren millones de animales en todo el mundo. 
        Trabajamos incansablemente para rescatar y rehabilitar animales explotados en circos, granjas industriales, 
        y otros entornos abusivos. Al contribuir, estás ayudando a ofrecerles una vida digna y libre de sufrimiento. 
        ¡Contamos contigo para darles una voz y cambiar sus vidas!';

        // imagen
        $imagen = '../assets/images/tigre.jpg';

        $segundoTitulo = 'ANIMALES EN PELIGRO DE EXPLOTACIÓN';

        return view('front-client.animalesAmenazados', compact('titulo', 'texto', 'imagen', 'segundoTitulo'));
    }
}
