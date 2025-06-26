<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Producto;

class Categoria extends Model
{
    use HasFactory;

    protected $table = 'categoria_producto';
    
    public $timestamps = false;
    
    protected $primaryKey = 'id_categoria_producto';

    protected $fillable = [
        'categoria'
    ];

    public function productos(): HasMany
    {
        return $this->hasMany(Producto::class, 'id_categoria_producto');
    }
}
