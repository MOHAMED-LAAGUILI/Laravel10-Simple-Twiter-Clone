<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tweet; // Make sure to import your Tweet model
use Faker\Factory as Faker;

class TweetSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        // Seed 50 random tweets
        foreach (range(1, 50) as $index) {
            Tweet::create([
                'content' => $faker->sentence(10), // Generates a random sentence with 10 words
            ]);
        }
    }
}
