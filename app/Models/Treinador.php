<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Treinador extends Model
{
    protected $fillable = [
        'name', 
    ];

    public function pokemons()
    {
        return $this->hasMany(Pokemon::class);
    }
}
