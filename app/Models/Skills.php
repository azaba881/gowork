<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skills extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 
        'level', 
    ];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
