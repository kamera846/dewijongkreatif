<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register', [
            'judul' => 'Register'
        ]);
    }

    public function store(Request $request)
    {

        $validateData = $request->validate([
            'nama' => 'required',
            'email' => 'required|email:dns',
            'password' => 'required|min:8',
            'alamat' => 'required',
            'foto_profil' => 'image'
        ]);
        if ($request->file('foto_profil')) {
            $validateData['foto_profil'] = $request->file('foto_profil')->store('foto-profil');
        }

        User::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => hash::make($request->password),
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'pekerjaan' => $request->pekerjaan,
            'foto_profil' => $request->foto_profil,
        ])->save();
        return redirect('/login')->with('success', 'Registration Success, Please Login!');
    }
}
