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
                'available' => 10,
            ]
        ];
        Available::query()->insert($available);
    }
}
