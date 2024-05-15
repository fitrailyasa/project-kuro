<?php

namespace Database\Seeders;

use App\Models\Package;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $packages = [
            [
                'id' => Str::uuid(),
                'name' => 'Personal Silver (Photographer)',
                'category_id' => $this->category('Photographer'),
                'desc' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolores reprehenderit doloremque eaque incidunt. Maxime adipisci laudantium architecto odio dicta perferendis ipsum dolores suscipit animi natus, amet quas fugit officiis aut earum quo, sit labore nam. Quo nisi sequi placeat aspernatur, voluptatibus labore facere atque quis ea hic, delectus magni necessitatibus ipsa maiores vel? Repudiandae nulla est dolor praesentium aliquam magni.',
                'img' => 'logo.png',
                'price' => 0,
                'type' => 'P',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Personal Gold (Photographer)',
                'category_id' => $this->category('Photographer'),
                'desc' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolores reprehenderit doloremque eaque incidunt. Maxime adipisci laudantium architecto odio dicta perferendis ipsum dolores suscipit animi natus, amet quas fugit officiis aut earum quo, sit labore nam. Quo nisi sequi placeat aspernatur, voluptatibus labore facere atque quis ea hic, delectus magni necessitatibus ipsa maiores vel? Repudiandae nulla est dolor praesentium aliquam magni.',
                'img' => 'logo.png',
                'price' => 0,
                'type' => 'P',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Personal Silver (Studio)',
                'category_id' => $this->category('Studio'),
                'desc' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolores reprehenderit doloremque eaque incidunt. Maxime adipisci laudantium architecto odio dicta perferendis ipsum dolores suscipit animi natus, amet quas fugit officiis aut earum quo, sit labore nam. Quo nisi sequi placeat aspernatur, voluptatibus labore facere atque quis ea hic, delectus magni necessitatibus ipsa maiores vel? Repudiandae nulla est dolor praesentium aliquam magni.',
                'img' => 'logo.png',
                'price' => 0,
                'type' => 'S',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];
        Package::query()->insert($packages);
    }

    private function Category(string $name): string
    {
        $category = Category::where('name', $name)->first();
        if (!$category) {
            $category = Category::create([
                'id' => Str::uuid(),
                'name' => $name,
            ]);
        }
        return $category->id;
    }
}
