<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Available;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminAvailableController extends Controller
{
    public function index()
    {
        $availables = Available::all()->reverse();
        return view('admin.available.index', compact('availables'));
    }

    public function update(Request $request, $id)
    {
        $Available = Available::findOrFail($id);

        $request->validate([
            'available' => 'required|max:255',
        ]);

        $Available->update([
            'available' => $request->available,
        ]);

        return back()->with('alert', 'Berhasil Edit Data Available!');
    }
}
