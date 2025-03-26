<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $contacts = [
            [
                'date' => '2024-11-14T10:30:00',
                'asunto' => 'Consulta sobre disponibilidad',
                'comment' => 'Estoy interesado en reservar una habitación para el mes de enero.',
                'customer_name' => 'Margette',
                'customer_lastname' => 'Verman',
                'customer_email' => 'margette.verman@example.com',
                'customer_phone' => '600123456',
            ],
            [
                'date' => '2024-12-04T14:15:00',
                'asunto' => 'Solicitud de información',
                'comment' => '¿Tienen habitaciones disponibles para el mes de febrero? Necesito más detalles.',
                'customer_name' => 'Glad',
                'customer_lastname' => "O'Kinneally",
                'customer_email' => 'glad.okinneally@example.com',
                'customer_phone' => '612345678',
            ]
        ];

        foreach ($contacts as $contact) {
            Contact::create($contact);
        }
    }
}
