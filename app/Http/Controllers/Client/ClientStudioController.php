<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Package;
use App\Models\Category;
use Illuminate\Http\Request;

class ClientStudioController extends Controller
{
    public function index()
    {
        $studios = Package::where('type', 'S')->paginate(10);
        return view('client.studio.index', compact('studios'));
    }

    public function show(string $id)
    {
        $studio = Package::where('type', 'S')->findOrFail($id);
        return view('client.studio.show', compact('studio'));
    }

    public function order(string $id)
    {
        $studio = Package::where('type', 'S')->findOrFail($id);
        return view('client.studio.order', compact('studio'));
    }
    
}
