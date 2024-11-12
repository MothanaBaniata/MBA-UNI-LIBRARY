<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'role' => 'superadmin',
        ]);

        User::factory(3)->create([
            'role' => 'admin',
        ]);

        User::factory(10)->create([
            'role' => 'student',
        ]);
    }
}
