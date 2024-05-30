<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'id' => Str::uuid(),
                'name' => 'Graduation Personal',
                'desc' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolores reprehenderit doloremque eaque incidunt. Maxime adipisci laudantium architecto odio dicta perferendis ipsum dolores suscipit animi natus, amet quas fugit officiis aut earum quo, sit labore nam. Quo nisi sequi placeat aspernatur, voluptatibus labore facere atque quis ea hic, delectus magni necessitatibus ipsa maiores vel? Repudiandae nulla est dolor praesentium aliquam magni.',
                'img' => "logo.png",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Graduation Group',
                'desc' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolores reprehenderit doloremque eaque incidunt. Maxime adipisci laudantium architecto odio dicta perferendis ipsum dolores suscipit animi natus, amet quas fugit officiis aut earum quo, sit labore nam. Quo nisi sequi placeat aspernatur, voluptatibus labore facere atque quis ea hic, delectus magni necessitatibus ipsa maiores vel? Repudiandae nulla est dolor praesentium aliquam magni.',
                'img' => "logo.png",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Other Events',
                'desc' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolores reprehenderit doloremque eaque incidunt. Maxime adipisci laudantium architecto odio dicta perferendis ipsum dolores suscipit animi natus, amet quas fugit officiis aut earum quo, sit labore nam. Quo nisi sequi placeat aspernatur, voluptatibus labore facere atque quis ea hic, delectus magni necessitatibus ipsa maiores vel? Repudiandae nulla est dolor praesentium aliquam magni.',
                'img' => "logo.png",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Studio',
                'desc' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolores reprehenderit doloremque eaque incidunt. Maxime adipisci laudantium architecto odio dicta perferendis ipsum dolores suscipit animi natus, amet quas fugit officiis aut earum quo, sit labore nam. Quo nisi sequi placeat aspernatur, voluptatibus labore facere atque quis ea hic, delectus magni necessitatibus ipsa maiores vel? Repudiandae nulla est dolor praesentium aliquam magni.',
                'img' => "logo.png",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

        ];
        Category::query()->insert($categories);
    }
}
