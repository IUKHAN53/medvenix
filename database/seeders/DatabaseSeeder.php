<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\TeamMember;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        TeamMember::create([
            'name' => 'Lee Tan',
            'designation' => 'CEO',
            'image' => 'team-member-1694282585.jpg',
            'linkedin_url' => 'https://www.linkedin.com/',
            'quote' => 'Superpower: can see the future of conversational AI',
        ]);
    }
}
