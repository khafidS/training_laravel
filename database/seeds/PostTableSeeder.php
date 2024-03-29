<?php

use Illuminate\Database\Seeder;

use Faker \ Factory;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //reset table PostTableSeeder
        DB::table('posts')->truncate();

        // create 10 post contents

        $post = [];
        $faker = Faker \ Factory::create();


        for ($i=0 ; $i<=10 ; $i++)
        {
          $image = "Post_Image_".rand(0, 1).".jpg";
          $date = date("Y-m-d H:i:s", strtotime("2019-07-20 22:28:00 + {$i} days"));
          $post[] =
          [
              'author_id' => rand(1, 3),
              'title' => $faker->sentence(rand(8, 12)),
              'excerpt' => $faker->text(rand(250, 300)),
              'body' => $faker->paragraphs(rand(10, 15), true),
              'slug' => $faker->slug(),
              'image' => rand(0, 1) == 1 ? $image : NULL,
              'created_at' => $date,
              'updated_at' => $date,
          ];
        }

        DB::table('posts')->insert($post);
    }
}
