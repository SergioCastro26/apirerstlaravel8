<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    use HasFactory;

    protected $fillable = ['idCliente', 'fechaCompra', 'total'];

    public function cliente(){
        return $this->belongsTo(Cliente::class);
    }

    public function compraDetalle(){
        return $this->hasMany(CompraDetalle::class, 'idCompra');
    }
}
