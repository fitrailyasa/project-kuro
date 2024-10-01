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
            'name' => 'required|max:255',
            'img1' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'img2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'img3' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'img4' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'img5' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'img6' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $Available->update([
            'name' => $request->name,
        ]);

        if ($request->hasFile('img0')) {
            $img = $request->file('img0');
            $file_name = time() . '_' . $Available->name . '_' . $img->getClientOriginalExtension();
            $Available->img0 = $file_name;
            $Available->update();
            $img->move('../public/assets/img/', $file_name);
        }
        if ($request->hasFile('img1')) {
            $img = $request->file('img1');
            $file_name = time() . '_' . $Available->name . '_' . $img->getClientOriginalExtension();
            $Available->img1 = $file_name;
            $Available->update();
            $img->move('../public/assets/img/', $file_name);
        }
        if ($request->hasFile('img2')) {
            $img = $request->file('img2');
            $file_name = time() . '_' . $Available->name . '_' . $img->getClientOriginalExtension();
            $Available->img2 = $file_name;
            $Available->update();
            $img->move('../public/assets/img/', $file_name);
        }
        if ($request->hasFile('img3')) {
            $img = $request->file('img3');
            $file_name = time() . '_' . $Available->name . '_' . $img->getClientOriginalExtension();
            $Available->img3 = $file_name;
            $Available->update();
            $img->move('../public/assets/img/', $file_name);
        }
        if ($request->hasFile('img4')) {
            $img = $request->file('img4');
            $file_name = time() . '_' . $Available->name . '_' . $img->getClientOriginalExtension();
            $Available->img4 = $file_name;
            $Available->update();
            $img->move('../public/assets/img/', $file_name);
        }
        if ($request->hasFile('img5')) {
            $img = $request->file('img5');
            $file_name = time() . '_' . $Available->name . '_' . $img->getClientOriginalExtension();
            $Available->img5 = $file_name;
            $Available->update();
            $img->move('../public/assets/img/', $file_name);
        }
        if ($request->hasFile('img6')) {
            $img = $request->file('img6');
            $file_name = time() . '_' . $Available->name . '_' . $img->getClientOriginalExtension();
            $Available->img6 = $file_name;
            $Available->update();
            $img->move('../public/assets/img/', $file_name);
        }

        return back()->with('alert', 'Berhasil Edit Data!');
    }
}
