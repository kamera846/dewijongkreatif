<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register', [
            'judul_halaman' => 'Register|Super Admin'
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            // 'foto_profil' => 'image|file',
            'nama' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'alamat' => 'required',
        ]);

        if ($request->file('foto_profil')) {
            $request->file('foto_profil')->store('foto-profil');
        }


        User::create([
            'foto_profil' => $request->foto_profil,
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => hash::make($request->password),
            'alamat' => $request->alamat,
            'pekerjaan' => $request->pekerjaan,
            'no_hp' => $request->no_hp,
            'role' => $request->role,
        ]);

        return redirect('/login')->with('success', 'registrasi berhasil');
    }
}
