<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Rooms;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $rooms = [
            [
                'number' => 'R101',
                'type' => 'Double Bed',
                'amenities' => json_encode([1,2,3,4,5,6]),
                'price' => 372,
                'offert_price' => 75,
                'offert' => false,
                'status' => true,
                'cancelation' => 'this is cancelation poli',
                'description' => 'this is room description',
                'photos' => json_encode(["/assets/img/room1a.jpg", "/assets/img/room1b.jpg", "/assets/img/room1c.jpg"]),
            ],
            [
                'number' => 'R102',
                'type' => 'Double Bed',
                'amenities' => json_encode([1,2,3,4,5,6]),
                'price' => 373,
                'offert_price' => 39,
                'offert' => false,
                'status' => true,
                'cancelation' => 'this is cancelation poli',
                'description' => 'this is room description',
                'photos' => json_encode(["/assets/img/room1a.jpg", "/assets/img/room1b.jpg", "/assets/img/room1c.jpg"]),
            ],
            [
                'number' => 'R103',
                'type' => 'Single Bed',
                'amenities' => json_encode([1,2,3,4,5,6]),
                'price' => 288,
                'offert_price' => 3,
                'offert' => false,
                'status' => false,
                'cancelation' => 'this is cancelation poli',
                'description' => 'this is room description',
                'photos' => json_encode(["/assets/img/room1b.jpg", "/assets/img/room1a.jpg", "/assets/img/room1c.jpg"]),
            ],
        ];

        foreach ($rooms as $room) {
            Rooms::create($room);
        }
    }
}
