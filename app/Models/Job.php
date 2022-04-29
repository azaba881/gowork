<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'affiche', 
        'title', 
        'nombre',
        'ville',
        'type',
        'experience',
        'salaire',
        'categorie',
        'description',
        'expiration',
        'statut',
    ];
    
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
