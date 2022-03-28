<?php

use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

require_once 'vendor/autoload.php';

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 5; $i++) {
            $post = new Post();
            $faker = Faker\Factory::create();
            $post->title = $faker->text(50);
            $post->content = $faker->paragraph(2, false);
            $post->image = $faker->imageUrl(50, 50);
            $post->slug = Str::slug($post->title, '-');
            $post->save();
        }
    }
}
