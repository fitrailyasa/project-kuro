<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    public function index()
    {
        $roles = [
            [
                'id' => 'admin',
                'name' => 'Admin',
            ]
        ];
        $users = User::all();
        return view('admin.user.index', compact('users', 'roles'));
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required|max:255',
                'email' => 'required|max:255|unique:users,email',
                'no_hp' => 'required',
                'password' => 'required',
                'role' => 'required'
            ],
            [
                'name.required' => 'name harus diisi!',
                'name.max' => 'name maksimal 255 karakter!',
                'email.required' => 'Email harus diisi!',
                'email.max' => 'Email maksimal 255 karakter!',
                'email.unique' => 'Email sudah terdaftar!',
                'no_hp.required' => 'No HP harus diisi!',
                'password.required' => 'Password harus diisi!',
                'role.required' => 'Roles harus diisi!'
            ]
        );
        
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'password' => Hash::make($request->password),
            'role' => $request->role
        ]);

        if (auth()->user()->role == 'admin') {
            return back()->with('alert', 'Berhasil Tambah User!');
        }
    }

    public function update(Request $request, string $id)
    {
        $request->validate(
            [
                'name' => 'required|max:255',
                'email' => 'required|max:255',
                'no_hp' => 'required',
                'role' => 'required'
            ],
            [
                'name.required' => 'name harus diisi!',
                'name.max' => 'name maksimal 255 karakter!',
                'email.required' => 'Email harus diisi!',
                'email.max' => 'Email maksimal 255 karakter!',
                'no_hp.required' => 'No HP harus diisi!',
                'role.required' => 'Roles harus diisi!'
            ]
        );

        $user = User::where('id', $id)->first();
        $user->update(
            [
                'name' => $request->name,
                'email' => $request->email,
                'no_hp' => $request->no_hp,
                'password' => Hash::make($request->password),
                'role' => $request->role
            ]
        );
        if (auth()->user()->role == 'admin') {
            return back()->with('alert', 'Berhasil Edit User!');
        }
    }

    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        if (auth()->user()->role == 'admin') {
            return back()->with('alert', 'Berhasil Hapus User!');
        }
    }
}
