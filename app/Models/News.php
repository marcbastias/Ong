<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    // Nombre de la tabla en la base de datos
    protected $table = 'news';

    // Campos que se pueden asignar masivamente
    protected $fillable = ['title', 'content', 'category_id', 'author_id', 'publish_date'];

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
