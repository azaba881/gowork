<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entreprise extends Model
{
    use HasFactory;
    protected $fillable = [
        'logo', 
        'nom',
        'description',
        'domaine',
        'addresse',
        'site',
        'numero',
        'linkedyn',
    ];
    
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
