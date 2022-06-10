<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidature extends Model
{
    use HasFactory;
    protected $fillable = [
        'comment',
        'job',
        'fichier' 
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
