<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Booking;
use App\Models\Package;
use App\Models\Category;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $users = User::all()->count();
        $packages = Package::all()->count();
        $bookings = Booking::all()->count();
        $categories = Category::all()->count();
        return view('admin.dashboard', compact('users', 'packages', 'bookings', 'categories'));
    }
}
