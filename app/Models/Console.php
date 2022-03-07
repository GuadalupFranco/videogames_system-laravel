<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Console extends Model
{
    use HasFactory;

    public function videogames() //El nombre especifica la relación
    {
        return $this->hasMany(Videogame::class);
    }
}
