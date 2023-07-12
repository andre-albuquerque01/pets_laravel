<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Itens extends Model
{
    use HasFactory;
    protected $table = 'itens';

    public function user()
    {
        // Retorna ao usuario que pertecen
        return $this->belongsTo(User::class, 'id_users');
    }
    public function categoria()
    {
        // Retorna ao usuario que pertecen
        return $this->belongsTo(categorys::class, 'id_category');
    }
    public function image()
    {
        // Retorna ao usuario que pertecen
        return $this->belongsTo(Image::class, 'id_image');
    }
}
