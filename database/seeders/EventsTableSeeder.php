<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
            [
                'name' => 'Conferencia sobre adopción de mascotas',
                'description' => 'Una conferencia informativa sobre la importancia de la adopción de mascotas y cómo puede ayudar a salvar vidas. Ven y aprende sobre los diferentes procesos de adopción y cómo puedes hacer una diferencia en la vida de un animal necesitado.',
                'url' => 'https://zooniamascotas.es/server/Portal_0045366_0052760/IMG-20220922-WA0013.jpg',
                'location' => 'Centro de Convenciones',
                'start_date' => '2024-06-15',
                'end_date' => '2024-06-17',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Taller de conservación de especies en peligro de extinción',
                'description' => 'Un taller educativo dedicado a la conservación de especies en peligro de extinción. Únete a nosotros para aprender sobre las amenazas que enfrentan estos animales y lo que podemos hacer para protegerlos y preservar su hábitat natural.',
                'url'=> 'https://www.latercera.com/resizer/DiPqUev1pWwxfz6k7Jkm5pJX2hg=/900x600/smart/cloudfront-us-east-1.images.arcpublishing.com/copesa/RZ7AM5HLZZCLHOYIVVVN4LOXWQ.jpg',
                'location' => 'Parque Central',
                'start_date' => '2024-07-20',
                'end_date' => '2024-07-20',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Jornada de voluntariado en refugios de animales',
                'description' => 'Únete a nosotros para una jornada de voluntariado en refugios de animales. Ayuda a cuidar y socializar con los animales, limpia y mejora sus espacios, y contribuye a su bienestar general. No se necesita experiencia, ¡solo ganas de ayudar!',
                'url'=> 'https://www.webconsultas.com/sites/default/files/styles/wc_adaptive_image__medium/public/media/2019/07/22/voluntarios_animales.jpg',
                'location' => 'Refugio de Animales de la Ciudad',
                'start_date' => '2024-08-10',
                'end_date' => '2024-08-12',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Campaña de esterilización y castración',
                'description' => 'Participa en nuestra campaña de esterilización y castración de mascotas. Ayuda a controlar la población de animales abandonados y reduce el número de animales sin hogar en nuestra comunidad. Todos los servicios son gratuitos para animales de familias con recursos limitados.',
                'url'=> 'https://www.clinicaveterinariazarpa.com/wp-content/uploads/2023/02/zarpa-campana-esterilizacion-blog-1080x675.jpg',
                'location' => 'Centro Comunitario',
                'start_date' => '2024-09-05',
                'end_date' => '2024-09-05',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Feria de adopción de animales',
                'description' => 'Ven y encuentra a tu nuevo mejor amigo en nuestra feria de adopción de animales. Conoce a una variedad de mascotas que buscan un hogar amoroso y responsable. Todos los animales están vacunados, esterilizados y listos para ser adoptados.',
                'url'=> 'https://media.istockphoto.com/id/1250060339/es/foto/refugio-para-perros.jpg?s=612x612&w=0&k=20&c=XuAoL_KZO3yXlzoo9PwuTOy0HDf8txpFVpEsQzzjMxY=',
                'location' => 'Plaza del Pueblo',
                'start_date' => '2024-10-01',
                'end_date' => '2024-10-10',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Taller de primeros auxilios para mascotas',
                'description' => 'Aprende habilidades vitales de primeros auxilios para mascotas en nuestro taller especializado. Desde vendajes y RCP hasta manejo de emergencias, este taller te preparará para manejar situaciones de emergencia con tus mascotas.',
                'url'=> 'https://www.vetformacion.com/wp-content/uploads/2023/08/Curso_PrimerosAuxilios_Imatges_3.jpg',
                'location' => 'Hospital Veterinario Local',
                'start_date' => '2024-11-15',
                'end_date' => '2024-11-15',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Campaña de concienciación sobre el bienestar animal',
                'description' => 'Únete a nuestra campaña de concienciación sobre el bienestar animal. A través de eventos educativos, actividades interactivas y material informativo, buscamos promover el respeto y la compasión hacia todos los seres vivos.',
                'url'=> 'https://revistaalsolajero.com/wp-content/uploads/2024/01/Campan%CC%83a-Tu-perro-tu-responsabilidad-en-Hari%CC%81a-Alsolajero.com_.jpeg',
                'location' => 'Plaza Principal',
                'start_date' => '2024-12-01',
                'end_date' => '2024-12-10',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Carrera benéfica por los derechos de los animales',
                'description' => 'Participa en nuestra carrera benéfica por los derechos de los animales. Corre, camina y únete a nosotros para recaudar fondos y concienciar sobre la importancia de proteger y respetar a todas las criaturas vivientes. Todos los fondos recaudados se destinarán a apoyar programas de rescate, rehabilitación y adopción de animales en nuestra comunidad.',
                'url'=> 'https://www.publico.es/uploads/2018/10/14/5bc38f6be394b.jpg',
                'location' => 'Parque Natural',
                'start_date' => '2025-01-15',
                'end_date' => '2025-01-15',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Campamento de Conservación',
                'description' => 'Únete a nuestro campamento de conservación de la vida silvestre y experimenta la naturaleza de primera mano. Aprende sobre la biodiversidad local, participa en actividades de restauración del hábitat y ayuda a conservar el entorno natural para las generaciones futuras.',
                'url' => 'https://www.bioparcfuengirola.es/wp-content/uploads/2023/03/web1.png',
                'location' => 'Reserva Natural',
                'start_date' => '2025-02-20',
                'end_date' => '2025-02-25',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
        ]);
    }
}

