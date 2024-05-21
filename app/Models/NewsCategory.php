<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsCategory extends Model
{
    use HasFactory;

    protected $table = 'news_categories'; // Esta línea es opcional si el nombre de la tabla sigue la convención de Laravel

    protected $fillable = ['name', 'description'];

    public function getRouteKeyName(){
        return 'slug';
    }

    // Relación 1:M
    public function news()
    {
        return $this->hasMany(News::class, 'category_id');
    }
}
