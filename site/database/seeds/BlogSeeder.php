<?php

use App\Blog;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $blog = new Blog();
        $blog->image = $faker->imageUrl(600, 800);
        $blog->title = $faker->sentence(7);
        $blog->synopsis = $faker->paragraph(5);
        $blog->user_id = 6;

        $blog->save();
    }
}
