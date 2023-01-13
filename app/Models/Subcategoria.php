<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategoria extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $fillable = [
        'id',
        'slug',
        'seo-title',
        'seo-description',
        'seo-image',
        'name',
        'description',
        'image',
        'orden',
        'portada',
        'publicado',
        'categoria_id',
    ];
    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }
}
