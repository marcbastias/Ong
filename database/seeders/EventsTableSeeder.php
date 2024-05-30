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
                'name' => 'Conferencia de Tecnología',
                'description' => 'Una conferencia sobre las últimas tendencias en tecnología.',
                'location' => 'Centro de Convenciones',
                'start_date' => '2024-06-15',
                'end_date' => '2024-06-17',
                'organizer_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Maratón Benéfico',
                'description' => 'Un evento para recaudar fondos para la caridad.',
                'location' => 'Parque Central',
                'start_date' => '2024-07-20',
                'end_date' => '2024-07-20',
                'organizer_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Festival de Música',
                'description' => 'Disfruta de las mejores bandas en vivo.',
                'location' => 'Auditorio Nacional',
                'start_date' => '2024-08-10',
                'end_date' => '2024-08-12',
                'organizer_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Taller de Artesanía',
                'description' => 'Aprende técnicas de artesanía con expertos.',
                'location' => 'Centro Cultural',
                'start_date' => '2024-09-05',
                'end_date' => '2024-09-05',
                'organizer_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Exposición de Arte',
                'description' => 'Muestra de obras de arte contemporáneo.',
                'location' => 'Galería de Arte',
                'start_date' => '2024-10-01',
                'end_date' => '2024-10-10',
                'organizer_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
