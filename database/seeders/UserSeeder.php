<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        User::factory()->create([
            'name' => 'Pablo Paredes',
            'email' => 'pablo@paredes.com',
            'password' => bcrypt('12345'),
            'id_number' => '123456789',
            'phone' => '5555555555',
            'address' => 'Calle 123 , Fraccionamiento 648',
        ])->assignRole('Doctor');
    }
}

