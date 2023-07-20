<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrdenContractual extends Model
{
    use HasFactory;

    public function bienes()
    {
        return $this->hasMany(Bien::class);
    }
    public function item()
    {
        return $this->hasMany(Item::class);
    }
}