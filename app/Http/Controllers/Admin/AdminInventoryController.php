<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Inventory;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminInventoryController extends Controller
{
    public function index()
    {
        $inventories = Inventory::all();
        $categories = Category::all();
        return view('admin.inventory.index', compact('inventories', 'categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'category_id' => 'required',
            'desc' => 'max:255',
            'img' => 'mimes:jpg,jpeg,png|max:2048',
        ]);

        $inventory = Inventory::create([
            'id' => Str::uuid(),
            'name' => $request->name,
            'category_id' => $request->category_id,
            'desc' => $request->desc,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        if ($request->hasFile('img')) {
            $img = $request->file('img');
            $file_name = time() . '_' . $inventory->name . '_' . $img->getClientOriginalExtension();
            $inventory->img = $file_name;
            $inventory->update();
            $img->move('../public/assets/img/', $file_name);
        }

        if(auth()->user()->role == 'admin') {
            return back()->with('alert', 'Berhasil Tambah Data Inventory!');
        } else {
            return back()->with('alert', 'Gagal Tambah Data Inventory!');
        }
    }

    public function update(Request $request, $id)
    {
        $inventory = Inventory::findOrFail($id);
        
        $request->validate([
            'name' => 'required|max:255',
            'category_id' => 'required',
            'desc' => 'max:255',
            'img' => 'mimes:jpg,jpeg,png|max:2048',
        ]);

        $inventory->update([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'desc' => $request->desc,
            'updated_at' => now(),
        ]);

        if ($request->hasFile('img')) {
            $img = $request->file('img');
            $file_name = time() . '_' . $inventory->name . '_' . $img->getClientOriginalExtension();
            $inventory->img = $file_name;
            $inventory->update();
            $img->move('../public/assets/img/', $file_name);
        }

        if(auth()->user()->role == 'admin') {
            return back()->with('alert', 'Berhasil Edit Data Inventory!');
        } else {
            return back()->with('alert', 'Gagal Edit Data Inventory!');
        }
    }

    public function destroy($id)
    {
        $inventory = Inventory::findOrFail($id);
        $inventory->delete();

        if(auth()->user()->role == 'admin') {
            return back()->with('alert', 'Berhasil Hapus Data Inventory!');
        } else {
            return back()->with('alert', 'Gagal Hapus Data Inventory!');
        }
    }

}
