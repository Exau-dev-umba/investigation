<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plainte extends Model
{
    use HasFactory;

    protected $fillable = [
        'num_ordre',
        'date_pub_rapport_enquete',
        'type_cas',
        'statut',
        'noms',
        'evidences',
        'nbr_jours_passe_sla',
    ];

    public function enquete()
    {
        return $this->hasMany(Enquete::class);
    }
}