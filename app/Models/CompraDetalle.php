<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompraDetalle extends Model
{
    use HasFactory;

    protected $fillable = ['idCompra', 'idProducto', 'fechaCompra', 'cantidad','valor'];

    protected $table = "compras_detalles";

    public function producto(){
        return $this->belongsTo(Producto::class);
    }
}
