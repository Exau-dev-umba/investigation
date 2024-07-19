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