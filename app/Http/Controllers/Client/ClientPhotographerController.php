<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Package;
use App\Models\Booking;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ClientPhotographerController extends Controller
{
    public function index()
    {
        $packages = Package::where('type', 'P')->paginate(10);
        return view('client.photographer.index', compact('packages'));
    }

    public function show(string $id)
    {
        $package = Package::where('type', 'P')->findOrFail($id);
        return view('client.photographer.show', compact('package'));
    }

    public function order(string $id)
    {
        $available = 10;
        $package = Package::where('type', 'P')->findOrFail($id);
        return view('client.photographer.order', compact('package', 'available'));
    }
    
    public function checkout(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'package_id' => 'required',
            'no_hp' => 'required',
            'location' => 'required',
            // 'date' => 'required',
            // 'time' => 'required',
        ]);

        $booking = Booking::create([
            'id' => Str::uuid(),
            'name' => $request->name,
            'package_id' => $request->package_id,
            'no_hp' => $request->no_hp,
            'location' => $request->location,
            // 'date' => $request->date,
            // 'time' => $request->time,
            'type' => 'P',
            'status' => 'Menunggu Konfirmasi',
            'price_1' => $request->price_1,
            'price_2' => $request->price_2,
            'price_3' => $request->price_3,
            'price_4' => $request->price_4,
            'price_5' => $request->price_5,
        ]);

        $total = $request->price_1 + $request->price_2 + $request->price_3 + $request->price_4 + $request->price_5;

        $booking->total = $total;
        $booking->save();

        // dd($booking);

        return redirect()->route('booking')->with('alert', 'Berhasil Order!');
    }
}
