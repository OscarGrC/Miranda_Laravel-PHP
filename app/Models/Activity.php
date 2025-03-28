<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Activity extends Model
{
    use HasFactory;

    protected $fillable = [
        'type', 
        'user_id', 
        'datetime', 
        'paid', 
        'notes', 
        'satisfaction'
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
