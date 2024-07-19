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


    public function alerteur()
    {
        return $this->belongsTo(Alerteur::class);
    }

    public function plaintes()
    {
        return $this->belongsTo(Plainte::class);
    }

    public function recommandations()
    {
        return $this->belongsToMany(Recommandation::class);
    }

    public function sanctions()
    {
        return $this->belongsToMany(Sanction::class);
    }
}