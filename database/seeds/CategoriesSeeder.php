<?php

use Illuminate\Database\Seeder;
use App\Category;
use Faker\Factory as Faker;
use Illuminate\Support\Str;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * php artisan db:seed --class=CategoriesSeeder
     *
     * @return void
     */
    public function run()
    {
        $data = [];

        $faker = Faker::create();

        $images = ['Aksesyaru.jpg', 'chehlu.jpg','Komp.jpg','noyt.jpg','Planshet.jpg','Telefon.jpg','kolonki.jpg'];

        for ($i = 0; $i < 10; $i++) {
            $key = $faker->numberBetween(0, 6);
            $data[] = [
                'image' => $images[$key],
                'name' => $faker->name,
                'action' => $faker->numberBetween(0, 1),
                'priority' => $faker->numberBetween(0, 10),
                'slug' => Str::slug($faker->name)
            ];
        }

        Category::insert($data);
    }
}
