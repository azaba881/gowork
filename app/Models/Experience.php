<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;
    protected $fillable = [
        'entreprise', 
        'type', 
        'debut', 
        'fin', 
    ];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
