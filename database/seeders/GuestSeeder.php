<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Guest;

class GuestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $guests = [
            [
                'name' => 'John Doe',
                'concert' => 'Rock Concert',
                'date' => now()->addDays(rand(1, 30)),
                'image' => 'guests/image1.jpg',
            ],
            [
                'name' => 'Jane Smith',
                'concert' => 'Jazz Night',
                'date' => now()->addDays(rand(1, 30)),
                'image' => 'guests/image2.jpg',
            ],

        ];

        DB::table('guests')->insert($guests);

        Guest::factory()->count(5)->create();
    }
}
