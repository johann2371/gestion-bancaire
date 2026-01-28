<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Client;

class ClientSeeder extends Seeder
{
    public function run(): void
    {
        $clients = [
            ['nom' => 'Jean Dupont', 'email' => 'jean.dupont@example.com', 'telephone' => '0612345678'],
            ['nom' => 'Marie Martin', 'email' => 'marie.martin@example.com', 'telephone' => '0623456789'],
            ['nom' => 'Pierre Durand', 'email' => 'pierre.durand@example.com', 'telephone' => '0634567890'],
            ['nom' => 'Sophie Bernard', 'email' => 'sophie.bernard@example.com', 'telephone' => '0645678901'],
            ['nom' => 'Luc Petit', 'email' => 'luc.petit@example.com', 'telephone' => '0656789012'],
            ['nom' => 'Emma Rousseau', 'email' => 'emma.rousseau@example.com', 'telephone' => '0667890123'],
            ['nom' => 'Thomas Morel', 'email' => 'thomas.morel@example.com', 'telephone' => '0678901234'],
            ['nom' => 'Camille Simon', 'email' => 'camille.simon@example.com', 'telephone' => '0689012345'],
            ['nom' => 'Lucas Michel', 'email' => 'lucas.michel@example.com', 'telephone' => '0690123456'],
            ['nom' => 'Julie Lefebvre', 'email' => 'julie.lefebvre@example.com', 'telephone' => '0601234567'],
        ];

        foreach ($clients as $client) {
            Client::create($client);
        }
    }
}
