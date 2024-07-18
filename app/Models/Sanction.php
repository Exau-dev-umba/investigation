<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sanction extends Model
{
    use HasFactory;

    protected $fillable = [
        'num_ordre',
        'reference',
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