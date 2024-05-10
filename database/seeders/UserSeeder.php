<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Daniel',
            'email' => 'danielodaver@gmail.com',
            'password' => Hash::make('123456789'),
            'role' => 'admin'
        ]);

        User::create([
            'name' => 'Pepe',
            'email' => 'aaaa@test.com',
            'password' => Hash::make('password')
        ]); 

        // Crear usuarios adicionales
        //User::factory()->count(10)->create();
    }
}
