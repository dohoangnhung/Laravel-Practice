<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
        \App\Models\User::factory(5)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Listing::factory(6)->create();

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
