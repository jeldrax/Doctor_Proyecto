<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Seeders\RoleSeeder;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //Llamar a RoleSeeder
        $this->call([
            RoleSeeder::class
        ]);

        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Pablo Paredes',
            'email' => 'pablo@paredes.com',
            'password' => bcrypt('12345'),
        ]);
    }
}