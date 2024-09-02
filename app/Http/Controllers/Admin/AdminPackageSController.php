<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Package;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminPackageSController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $packages = Package::where('type', 'S')->get();
        return view('admin.package_s.index', compact('packages', 'categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'category_id' => 'required',
            'desc' => 'max:1000',
            'list' => 'array',
            'list.*' => 'string|max:255',
            'img' => 'mimes:jpg,jpeg,png|max:2048',
            'price' => 'required',
        ]);

        $package = Package::create([
            'id' => Str::uuid(),
            'name' => $request->name,
            'category_id' => $request->category_id,
            'desc' => $request->desc,
            'list' => json_encode($request->input('list', [])),
            'price' => $request->price,
            'type' => 'S',
        ]);

        if ($request->hasFile('img')) {
            $img = $request->file('img');
            $file_name = time() . '_' . $package->name . '_' . $img->getClientOriginalExtension();
            $package->img = $file_name;
            $package->update();
            $img->move('../public/assets/img/', $file_name);
        }

        return back()->with('alert', 'Berhasil Tambah Data package!');
    }

    public function update(Request $request, $id)
    {
        $package = Package::findOrFail($id);

        $request->validate([
            'name' => 'required|max:255',
            'category_id' => 'required',
            'desc' => 'max:1000',
            'list' => 'array',
            'list.*' => 'string|max:255',
            'img' => 'mimes:jpg,jpeg,png|max:2048',
            'price' => 'required',
        ]);

        $package->update([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'desc' => $request->desc,
            'list' => json_encode($request->input('list')),
            'price' => $request->price,
            'type' => 'S',
        ]);

        if ($request->hasFile('img')) {
            $img = $request->file('img');
            $file_name = time() . '_' . $package->name . '_' . $img->getClientOriginalExtension();
            $package->img = $file_name;
            $package->update();
            $img->move('../public/assets/img/', $file_name);
        }

        return back()->with('alert', 'Berhasil Edit Data package!');
    }

    public function destroy($id)
    {
        $package = Package::findOrFail($id);
        $package->delete();

        return back()->with('alert', 'Berhasil Hapus Data package!');
    }
}
