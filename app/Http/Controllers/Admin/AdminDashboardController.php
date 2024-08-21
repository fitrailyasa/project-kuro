<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Available;
use App\Models\Booking;
use App\Models\Package;
use App\Models\Category;
use App\Models\Inventory;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $user = User::all()->count();
        $inventory = Inventory::all()->count();
        $available = Available::first();
        $package_p = Package::where('type', 'P')->get()->count();
        $package_s = Package::where('type', 'S')->get()->count();
        $booking_p = Booking::where('type', 'P')->get()->count();
        $booking_s = Booking::where('type', 'S')->get()->count();
        $category = Category::all()->count();
        return view('admin.dashboard', compact('user', 'available', 'inventory', 'package_p', 'package_s', 'booking_p', 'booking_s', 'category'));
    }
}
