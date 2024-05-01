<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Facades\Excel;

class AdminBookingSController extends Controller
{
    public function index()
    {
        $packages = Package::all();
        $bookings = Booking::where('type', 'S')->reverse()->get();
        return view('admin.booking_s.index', compact('bookings', 'packages'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'package_id' => 'required',
            'no_hp' => 'required',
            'location' => 'required',
            'date' => 'required',
            'time' => 'required',
        ]);

        $booking = Booking::create([
            'id' => Str::uuid(),
            'name' => $request->name,
            'package_id' => $request->package_id,
            'no_hp' => $request->no_hp,
            'location' => $request->location,
            'date' => $request->date,
            'time' => $request->time,
            'type' => 'P',
            'status' => 'Menunggu Konfirmasi',
            'price_1' => $request->price_1,
            'price_2' => $request->price_2,
            'price_3' => $request->price_3,
            'price_4' => $request->price_4,
            'price_5' => $request->price_5,
            'total' => $booking->price_1 + $booking->price_2 + $booking->price_3 + $booking->price_4 + $booking->price_5,
        ]);

        return back()->with('alert', 'Berhasil Tambah Data booking!');
    }

    public function edit(Request $request, $id)
    {
        $packages = Package::all();
        $booking = Booking::findOrfail($id);
        return view('admin.booking_s.edit', compact('booking', 'packages'));
    }

    public function update(Request $request, $id)
    {
        $booking = Booking::findOrFail($id);

        $request->validate([
            'status' => 'required',
        ]);

        $booking->update([
            'status' => $request->status,
        ]);

        return back()->with('alert', 'Berhasil Edit Data booking!');
    }

    public function destroy($id)
    {
        $booking = Booking::findOrFail($id);
        $booking->delete();

        return back()->with('alert', 'Berhasil Hapus Data booking!');
    }

}
