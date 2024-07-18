<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recommandation extends Model
{
    use HasFactory;

    protected $fillable = [
        'num_ordre',
        'date_reception',
        'recommandation',
        'causes',
        'acceptation',
        'commentaires',
        'date_cloture',
        'deadline',
    ];

    public function enquetes()
    {
        return $this->belongsToMany(Enquete::class);
    }
}