<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    use HasFactory;
    public function responsable()
    {
        return $this->belongsTo(Responsable::class);
    }

    public function item()
    {
        return $this->hasMany(Item::class);
    }
}