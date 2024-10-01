<?php

namespace Database\Seeders;

use App\Models\Available;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class AvailableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $available = [
            [
                'id' => Str::uuid(),
                'name' => 'Photographer 1',
                'img0' => 'logo.png',
                'img1' => 'logo.png',
                'img2' => 'logo.png',
                'img3' => 'logo.png',
                'img4' => 'logo.png',
                'img5' => 'logo.png',
                'img6' => 'logo.png',
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Photographer 2',
                'img0' => 'logo.png',
                'img1' => 'logo.png',
                'img2' => 'logo.png',
                'img3' => 'logo.png',
                'img4' => 'logo.png',
                'img5' => 'logo.png',
                'img6' => 'logo.png',
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Photographer 3',
                'img0' => 'logo.png',
                'img1' => 'logo.png',
                'img2' => 'logo.png',
                'img3' => 'logo.png',
                'img4' => 'logo.png',
                'img5' => 'logo.png',
                'img6' => 'logo.png',
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Photographer 4',
                'img0' => 'logo.png',
                'img1' => 'logo.png',
                'img2' => 'logo.png',
                'img3' => 'logo.png',
                'img4' => 'logo.png',
                'img5' => 'logo.png',
                'img6' => 'logo.png',
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Photographer 5',
                'img0' => 'logo.png',
                'img1' => 'logo.png',
                'img2' => 'logo.png',
                'img3' => 'logo.png',
                'img4' => 'logo.png',
                'img5' => 'logo.png',
                'img6' => 'logo.png',
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Photographer 6',
                'img0' => 'logo.png',
                'img1' => 'logo.png',
                'img2' => 'logo.png',
                'img3' => 'logo.png',
                'img4' => 'logo.png',
                'img5' => 'logo.png',
                'img6' => 'logo.png',
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Photographer 7',
                'img0' => 'logo.png',
                'img1' => 'logo.png',
                'img2' => 'logo.png',
                'img3' => 'logo.png',
                'img4' => 'logo.png',
                'img5' => 'logo.png',
                'img6' => 'logo.png',
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Photographer 8',
                'img0' => 'logo.png',
                'img1' => 'logo.png',
                'img2' => 'logo.png',
                'img3' => 'logo.png',
                'img4' => 'logo.png',
                'img5' => 'logo.png',
                'img6' => 'logo.png',
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Photographer 9',
                'img0' => 'logo.png',
                'img1' => 'logo.png',
                'img2' => 'logo.png',
                'img3' => 'logo.png',
                'img4' => 'logo.png',
                'img5' => 'logo.png',
                'img6' => 'logo.png',
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Photographer 10',
                'img0' => 'logo.png',
                'img1' => 'logo.png',
                'img2' => 'logo.png',
                'img3' => 'logo.png',
                'img4' => 'logo.png',
                'img5' => 'logo.png',
                'img6' => 'logo.png',
            ],
        ];
        Available::query()->insert($available);
    }
}
