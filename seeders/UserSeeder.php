<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@email.com',
            'role' => 'admin',
            'access' => 'yes',
            'verified' => 'yes',
            'password' => bcrypt('r00t')
        ]);

        User::factory(50)->create();
    }
}
