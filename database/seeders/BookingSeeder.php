<?php

namespace Database\Seeders;

use App\Models\Booking;
use App\Models\Package;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bookings = [
            [
                'id' => Str::uuid(),
                'package_id' => $this->Package('Platinum Package'),
                'name' => 'John Doe',
                'location' => 'Jakarta',
                'date' => Carbon::now()->format('Y-m-d'),
                'time' => Carbon::now()->format('H:i'),
                'no_hp' => '081234567890',
                'type' => 'P',
                'status' => 'Menunggu Konfirmasi',
                'price_1' => 100,
                'price_2' => 100,
                'price_3' => 100,
                'price_4' => 100,
                'price_5' => 100,
                'total' => 500,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => Str::uuid(),
                'package_id' => $this->Package('Diamond Package'),
                'name' => 'John Doe 2',
                'location' => 'Jakarta',
                'date' => Carbon::now()->format('Y-m-d'),
                'time' => Carbon::now()->format('H:i'),
                'no_hp' => '081234567890',
                'type' => 'P',
                'status' => 'Menunggu Konfirmasi',
                'price_1' => 100,
                'price_2' => 100,
                'price_3' => 100,
                'price_4' => 100,
                'price_5' => 100,
                'total' => 500,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => Str::uuid(),
                'package_id' => $this->Package('Personal Silver (Studio)'),
                'name' => 'John Doe',
                'location' => 'Jakarta',
                'date' => Carbon::now()->format('Y-m-d'),
                'time' => Carbon::now()->format('H:i'),
                'no_hp' => '081234567890',
                'type' => 'S',
                'status' => 'Menunggu Konfirmasi',
                'price_1' => 100,
                'price_2' => 100,
                'price_3' => 100,
                'price_4' => 100,
                'price_5' => 100,
                'total' => 500,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => Str::uuid(),
                'package_id' => $this->Package('Duo Package'),
                'name' => 'John Doe 2',
                'location' => 'Jakarta',
                'date' => Carbon::now()->format('Y-m-d'),
                'time' => Carbon::now()->format('H:i'),
                'no_hp' => '081234567890',
                'type' => 'S',
                'status' => 'Menunggu Konfirmasi',
                'price_1' => 100,
                'price_2' => 100,
                'price_3' => 100,
                'price_4' => 100,
                'price_5' => 100,
                'total' => 500,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];
        Booking::query()->insert($bookings);
    }

    private function Package(string $name): string
    {
        $package = Package::where('name', $name)->first();
        if (!$package) {
            $package = Package::create([
                'id' => Str::uuid(),
                'name' => $name,
            ]);
        }
        return $package->id;
    }
}
