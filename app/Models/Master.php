<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Master extends Model
{
    use HasFactory;
    protected $fillable = [
        'fichier', 
    ];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
