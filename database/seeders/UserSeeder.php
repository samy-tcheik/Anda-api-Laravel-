<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            "id" => Str::uuid(),
            'name' => 'Root',
            'email' => 'root@root.com',
            'latitude' => 36.76863235839,
            'longitude' => 3.4969149588378334
        ]);
    }
}
