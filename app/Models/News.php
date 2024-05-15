<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    // Nombre de la tabla en la base de datos
    protected $table = 'news';

    // Relación: Una noticia pertenece a una categoría
    public function category()
    {
        return $this->belongsTo(NewsCategory::class, 'category_id');
    }

    // Relación: Una noticia es escrita por un autor
    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }
}
