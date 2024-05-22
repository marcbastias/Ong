<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageEspecie extends Model
{
    use HasFactory;

    protected $table = 'pages_especies';

    protected $fillable = [
        'title', 'subtitle', 'header_image', 'body_image_1', 'body_image_2', 'content'
    ];

    // Convertir imágenes a base64 al recuperar de la base de datos
    protected $casts = [
        'header_image' => 'string',
        'body_image_1' => 'string',
        'body_image_2' => 'string',
    ];
}
