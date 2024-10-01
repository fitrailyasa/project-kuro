<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Package;
use App\Models\Booking;
use App\Models\Available;
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
        $available = Available::first();
        if ($available->available == 0) {
            return back()->with('alert', 'Tidak Ada Photographer Yang Tersedia!');
        }
        $package = Package::where('type', 'P')->findOrFail($id);
        return view('client.photographer.order', compact('package', 'available'));
    }

    public function checkout(Request $request)
    {
        $request->validate([
            'user_id' => 'required|max:255',
            'package_id' => 'required',
            'no_hp' => 'required',
            'location' => 'required',
            'datetime' => 'required',
            'price_2' => 'required|in:100000,300000',
        ]);

        $available = Available::first();
        $available->available = $available->available - 1;
        $available->save();

        $quantityOrang = (int) $request->input('price_1', 0);
        $pricePerOrang = 250000;

        $locationPrice = (int) $request->input('price_2', 0); // This should be 100000 or 300000
        $priceLocation = $locationPrice; // Assign the location price

        $durationHours = (int) $request->input('price_3', 0);
        $pricePerHour = 150000;

        $additionalPhotos = (int) $request->input('price_4', 0);
        $pricePer10Photos = 5000;

        $isCinematicVideo = $request->has('price_5');
        $priceCinematicVideo = $isCinematicVideo ? 550000 : 0;

        $total = Package::where('type', 'P')->findOrFail($request->package_id)->price;


        $total += ($quantityOrang * $pricePerOrang) +
            ($durationHours * $pricePerHour) +
            ($additionalPhotos * $pricePer10Photos) +
            $priceCinematicVideo +
            $priceLocation;

        $booking = Booking::create([
            'id' => Str::uuid(),
            'token' => Str::random(3) . '-' . $request->user_id . '-' . Str::random(3),
            'user_id' => $request->user_id,
            'package_id' => $request->package_id,
            'no_hp' => $request->no_hp,
            'location' => $request->location,
            'datetime' => $request->datetime,
            'type' => 'P',
            'status' => 'Menunggu Konfirmasi',
            'price_1' => $request->price_1,
            'price_2' => $request->price_2,
            'price_3' => $request->price_3,
            'price_4' => $request->price_4,
            'price_5' => $request->price_5,
            'total' => $total
        ]);

        // dd($booking);

        $booking->save();

        return redirect()->route('booking')->with('alert', 'Berhasil Order!');
    }
}
