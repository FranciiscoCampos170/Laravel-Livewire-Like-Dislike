<?php

use App\Post;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 0; $i < 5; $i++) {
            Post::create([
                'title'     => $faker->sentence,
                'full_text' => $faker->paragraph,
            ]);
        }
    }
}
