<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalidaAlmacen extends Model
{
    use HasFactory;
    public function factura()
    {
        return $this->hasMany(Factura::class);
    }
}