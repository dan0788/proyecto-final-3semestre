<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    public function solicitud()
    {
        return $this->belongsTo(Solicitud::class);
    }
    public function factura()
    {
        return $this->belongsTo(Factura::class);
    }
    public function orden_contractual()
    {
        return $this->belongsTo(OrdenContractual::class);
    }
}