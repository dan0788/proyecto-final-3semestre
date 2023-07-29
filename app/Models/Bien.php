<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bien extends Model
{
    use HasFactory;
    protected $fillable = ['Numero_orden'];
    public function orden_contractual(){
        return $this->belongsTo(OrdenContractual::class);
    }
}
