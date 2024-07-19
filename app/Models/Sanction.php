<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sanction extends Model
{
    use HasFactory;

    protected $fillable = [
        'num_ordre',
        'agent',
        'statut',
        'nbr_jour_pub_rapport',
        'date_pub_rh',
        'date_envoie_demande_exlp',
        'date_reception_demande_exlp',
        'date_sanction',
        'evidences',
        'nbr_jours_passe_sla',
    ];

    public function enquete()
    {
        return $this->belongsTo(Enquete::class);
    }

    public function type_sanciton()
    {
        return $this->belongsTo(Type_sanction::class);
    }

    public function motif_sanction()
    {
        return $this->belongsTo(Motif_sanction::class);
    }

    public function categorie_sanction()
    {
        return $this->belongsTo(Categorie_sanction::class);
    }

    public function employeur()
    {
        return $this->belongsTo(Employeur::class);
    }
}
