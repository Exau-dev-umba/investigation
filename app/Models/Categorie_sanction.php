<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie_sanction extends Model
{
    use HasFactory;

    protected $fillable = [
        'categorie',
    ];

    public function sanctions(){
        return $this->hasMany(Sanction::class);
    }
}
