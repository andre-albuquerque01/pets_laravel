<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categorys extends Model
{
    use HasFactory;

    protected $table = 'categorys';

    public function produtos()
    {
        // Tem muitas categorias nos itens
        return $this->hasMany(Itens::class, 'id_category', 'id_category');
    }
}
