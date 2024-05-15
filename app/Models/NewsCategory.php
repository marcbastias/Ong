<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewsCategory extends Model
{
    // Nombre de la tabla en la base de datos
    protected $table = 'news_categories';

    // Relación: Una categoría puede tener muchas noticias
    public function news()
    {
        return $this->hasMany(News::class, 'category_id');
    }
}
