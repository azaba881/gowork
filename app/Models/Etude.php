<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etude extends Model
{
    use HasFactory;

    protected $fillable = [
        'ecole', 
        'grade', 
        'debut', 
        'fin', 
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
