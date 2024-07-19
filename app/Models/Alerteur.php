<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alerteur extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'adresse',
        'telephone',
        'cuid',
    ];

    public function enquetes()
    {
        return $this->hasMany(Enquete::class);
    }
}
