<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enquete extends Model
{
    use HasFactory;

    protected $fillable = [
        'num_ordre',
        'date_reception',
        'provenance',
        'categorie',
        'entites_concernes',
        'type_cas',
        'repete',
        'libele',
        'avere',
        'date_demarrage',
        'status',
        'commentaires',
        'priorite',
        'montant_init_impact_financier',
        'montant_reel_impact_financier',
        'montant_recouvrir',
        'date_prevision_pub_rapport',
        'date_final_pub_rapport',
        'date_diffusion',
    ];
}
