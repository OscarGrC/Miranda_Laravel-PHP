<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'number', 'type', 'amenities', 'price', 'offert_price',
        'offert', 'status', 'cancelation', 'description', 'photos'
    ];

    protected $casts = [
        'photos' => 'array',
        'offert' => 'boolean',
        'status' => 'boolean',
    ];
}