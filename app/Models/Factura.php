<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    use HasFactory;
    public function salida_almacen()
    {
        return $this->belongsTo(SalidaAlmacen::class);
    }
    public function item()
    {
        return $this->hasMany(Item::class);
    }
}