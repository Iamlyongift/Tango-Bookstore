<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Tango;
use Illuminate\Database\Seeder;

class TangoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create a user to assign the books to
        $user = User::factory()->create();

        // Seed Tango records with the created user ID
        Tango::factory()->count(50)->create([
            'user_id' => $user->id,
        ]);
    }
}
