<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Motif_sanction extends Model
{
    use HasFactory;

    protected $fillable = [
        'motif',
    ];

    public function sanctions()
    {
        return $this->hasMany(Sanction::class);
    }
}