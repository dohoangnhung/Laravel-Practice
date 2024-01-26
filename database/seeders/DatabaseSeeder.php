<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Listing;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(5)->create();

        $user = User::factory()->create([
            'name' => 'John Doe',
            'email' => 'john@gmail.com',
        ]);

        Listing::factory(6)->create([
            'user_id' => $user->id
        ]);

        // DB::table('listings')->insert([
        //     'title' => 'Meditations',
        //     'tags' => 'Phylosopy',
        //     'company' => 'Unknown',
        //     'location' => 'Greek',
        //     'email' => 'unknown@gmail.com',
        //     'website' => 'https://www.nasa.gov',
        //     'description' => 'An incredible book but not easy to read'
        // ]);
    }
}
