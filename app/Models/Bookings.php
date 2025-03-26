<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'guest_name', 'guest_lastname', 'guest_email', 'guest_phone',
        'order_date', 'check_in', 'check_out', 'room_type',
        'room_number', 'special_request'
    ];

    public function room()
    {
        return $this->belongsTo(Room::class, 'room_number', 'number');
    }
}
