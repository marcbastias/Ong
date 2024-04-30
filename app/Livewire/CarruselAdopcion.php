<?php

namespace App\Livewire;

use Livewire\Attributes\Computed;
use Livewire\Component;

class CarruselAdopcion extends Component
{

    #[Computed()]
    public $data = [
        [
            'image' => './assets/images/img1.png',
            'title' => 'Gatito',
            'description' => 'Gatito en adopción',
        ],
        [
            'image' => './assets/images/img1.png',
            'title' => 'Perrito',
            'description' => 'Perrito en adopción',
        ],
        [
            'image' => './assets/images/img1.png',
            'title' => 'Conejito',
            'description' => 'Conejito en adopción',
        ]
    ];

    public function render()
    {
        return view('livewire.carrusel-adopcion');
    }
}
