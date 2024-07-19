<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type_sanction extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
    ];

    public function sanctions()
    {
        return $this->hasMany(Sanction::class);
    }
}