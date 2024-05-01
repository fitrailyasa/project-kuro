<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminCategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all()->reverse();
        return view('admin.category.index', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'desc' => 'max:255',
            'img' => 'mimes:jpg,jpeg,png|max:2048',
        ]);

        $category = Category::create([
            'id' => Str::uuid(),
            'name' => $request->name,
            'desc' => $request->desc,
        ]);

        if ($request->hasFile('img')) {
            $img = $request->file('img');
            $file_name = time() . '_' . $category->name . '_' . $img->getClientOriginalExtension();
            $category->img = $file_name;
            $category->update();
            $img->move('../public/assets/img/', $file_name);
        }

        if(auth()->user()->role == 'admin') {
            return back()->with('alert', 'Berhasil Tambah Data Category!');
        } else {
            return back()->with('alert', 'Gagal Tambah Data Category!');
        }
    }

    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        
        $request->validate([
            'name' => 'required|max:255',
            'desc' => 'max:255',
            'img' => 'mimes:jpg,jpeg,png|max:2048',
        ]);

        $category->update([
            'name' => $request->name,
            'desc' => $request->desc,
        ]);

        if ($request->hasFile('img')) {
            $img = $request->file('img');
            $file_name = time() . '_' . $category->name . '_' . $img->getClientOriginalExtension();
            $category->img = $file_name;
            $category->update();
            $img->move('../public/assets/img/', $file_name);
        }

        if(auth()->user()->role == 'admin') {
            return back()->with('alert', 'Berhasil Edit Data Category!');
        } else {
            return back()->with('alert', 'Gagal Edit Data Category!');
        }
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        if(auth()->user()->role == 'admin') {
            return back()->with('alert', 'Berhasil Hapus Data Category!');
        } else {
            return back()->with('alert', 'Gagal Hapus Data Category!');
        }
    }

}
