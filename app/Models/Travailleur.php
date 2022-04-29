<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Travailleur extends Model
{     
    use HasFactory;
    protected $fillable = [
        'photo', 
        'domaine',
        'adresse',
        'site',
        'numero',
        'linkedyn',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
