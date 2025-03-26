<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'date', 'asunto', 'comment', 'customer_name',
        'customer_lastname', 'customer_email', 'customer_phone'
    ];
}
