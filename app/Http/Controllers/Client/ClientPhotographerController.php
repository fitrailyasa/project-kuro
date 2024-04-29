<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Package;
use App\Models\Category;
use Illuminate\Http\Request;

class ClientPhotographerController extends Controller
{
    public function index()
    {
        $photographers = Package::where('type', 'P')->paginate(10);
        return view('client.photographer.index', compact('photographers'));
    }

    public function show(string $id)
    {
        $photographer = Package::where('type', 'P')->findOrFail($id);
        return view('client.photographer.show', compact('photographer'));
    }

    public function order(string $id)
    {
        $photographer = Package::where('type', 'P')->findOrFail($id);
        return view('client.photographer.order', compact('photographer'));
    }
    
    public function store(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:255',
            // 'package_id' => 'required',
            // 'no_hp' => 'required',
            // 'location' => 'required',
            // 'date' => 'required',
            // 'time' => 'required',
        ]);

        $booking = Booking::create([
            'id' => Str::uuid(),
            'name' => $request->name,
            // 'package_id' => $request->package_id,
            // 'no_hp' => $request->no_hp,
            // 'location' => $request->location,
            // 'date' => $request->date,
            // 'time' => $request->time,
            // 'type' => 'P',
            // 'status' => 'Menunggu Konfirmasi',
            // 'price_1' => $request->price_1,
            // 'price_2' => $request->price_2,
            // 'price_3' => $request->price_3,
            // 'price_4' => $request->price_4,
            // 'price_5' => $request->price_5,
            // 'total' => $booking->price_1 + $booking->price_2 + $booking->price_3 + $booking->price_4 + $booking->price_5,
        ]);

        dd($booking);

        return back()->with('alert', 'Berhasil Order!');
    }
}
