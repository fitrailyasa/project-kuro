<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Available;
use App\Models\Booking;
use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Facades\Excel;

class AdminBookingPController extends Controller
{
    public function index()
    {
        $packages = Package::all();
        $bookings = Booking::where('type', 'P')->get();
        return view('admin.booking_p.index', compact('bookings', 'packages'));
    }

    public function edit(Request $request, $id)
    {
        $packages = Package::all();
        $booking = Booking::findOrfail($id);
        return view('admin.booking_p.edit', compact('booking', 'packages'));
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

        if ($request->status == 'Selesai') {
            $available = Available::first();
            $available->available = $available->available + 1;
            $available->save();
        }

        return back()->with('alert', 'Berhasil Edit Data booking!');
    }

    public function destroy($id)
    {
        $booking = Booking::findOrFail($id);
        $booking->delete();

        return back()->with('alert', 'Berhasil Hapus Data booking!');
    }
}
