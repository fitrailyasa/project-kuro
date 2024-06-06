<?php

namespace Database\Seeders;

use App\Models\Booking;
use App\Models\Package;
use App\Models\User;
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
                'user_id' => $this->User('Administrator'),
                'location' => 'Jakarta',
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
                'user_id' => $this->User('Administrator'),
                'location' => 'Jakarta',
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
                'package_id' => $this->Package('Kids Photo'),
                'user_id' => $this->User('Administrator'),
                'location' => 'Jakarta',
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
                'user_id' => $this->User('Administrator'),
                'location' => 'Jakarta',
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

    private function User(string $name): string
    {
        $User = User::where('name', $name)->first();
        if (!$User) {
            $User = User::create([
                'id' => Str::uuid(),
                'name' => $name,
            ]);
        }
        return $User->id;
    }
}
