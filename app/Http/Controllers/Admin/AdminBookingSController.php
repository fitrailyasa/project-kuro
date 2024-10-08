<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Available;
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
        $bookings = Booking::where('type', 'S')->get();
        return view('admin.booking_s.index', compact('bookings', 'packages'));
    }

    public function edit(Request $request, $id)
    {
        $packages = Package::all();
        $booking = Booking::findOrfail($id);
        $status_pembayaran = 'Belum Dibayar';

        if ($booking->total_dibayar >= $booking->total) {
            $status_pembayaran = 'Lunas';
        } else if ($booking->total_dibayar > 0) {
            $status_pembayaran = 'Belum Lunas';
        }

        return view('admin.booking_s.edit', compact('booking', 'packages', 'status_pembayaran'));
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
    public function payment(Request $request, $id)
    {
        $booking = Booking::findOrFail($id);

        $request->validate([
            'total_dibayar' => 'required',
        ]);

        $booking->update([
            'total_dibayar' => $request->total_dibayar,
        ]);

        return back()->with('alert', 'Berhasil!');
    }

    public function destroy($id)
    {
        $booking = Booking::findOrFail($id);
        $booking->delete();

        return back()->with('alert', 'Berhasil Hapus Data booking!');
    }
}
