<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $bookings = [
            [
                'guest_name' => 'Margette',
                'guest_lastname' => 'Verman',
                'guest_email' => 'margette.verman@example.com',
                'guest_phone' => '600123456',
                'order_date' => '2024-11-14',
                'check_in' => '2025-01-15',
                'check_out' => '2025-03-20',
                'room_type' => 'Double Bed',
                'room_number' => 'R101',
                'special_request' => 'Cama adicional para niño, si es posible cerca de la ventana.',
            ],
            [
                'guest_name' => 'Glad',
                'guest_lastname' => "O'Kinneally",
                'guest_email' => 'glad.okinneally@example.com',
                'guest_phone' => '612345678',
                'order_date' => '2024-12-04',
                'check_in' => '2025-01-15',
                'check_out' => '2025-01-22',
                'room_type' => 'Double Bed',
                'room_number' => 'R102',
                'special_request' => 'Almohada extra y desayuno vegetariano para dos personas.',
            ]
        ];

        foreach ($bookings as $booking) {
            Booking::create($booking);
        }
    }
}
