<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class UserController extends Controller
{
    public function index()
    {
        return view('user', [
            'judul_halaman' => 'Admin | Data Pengguna',
            'users' => User::latest()->get()
        ]);
    }
    public function create()
    {
        return view('add-user', [
            'judul_halaman' => 'Admin | Tambah Pengguna'
        ]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'foto_profil' => 'image|file',
            'nama' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'alamat' => 'required',
        ]);

        if ($request->file('foto_profil')) {
            $fotoProfil = $request->file('foto_profil')->store('foto-profil');
            User::create([
                'foto_profil' => $fotoProfil,
                'nama' => $request->nama,
                'email' => $request->email,
                'password' => hash::make($request->password),
                'alamat' => $request->alamat,
                'pekerjaan' => $request->pekerjaan,
                'no_hp' => $request->no_hp,
                'role' => $request->role,
            ]);
        }
        User::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => hash::make($request->password),
            'alamat' => $request->alamat,
            'pekerjaan' => $request->pekerjaan,
            'no_hp' => $request->no_hp,
            'role' => $request->role,
        ]);
        return redirect('/user')->with('success', 'Data user berhasil ditambahkan');
    }


    public function show(User $user)
    {
        return view('detail-user', [
            'judul_halaman' => 'Admin | Detail Pengguna',
            'user' => $user
        ]);
    }

    public function edit(User $user)
    {
        return view('edit-user', [
            'judul_halaman' => 'Admin | Edit Pengguna',
            'user' => $user
        ]);
    }
    public function update(Request $request, User $user)
    {
        $request->validate([
            'foto_profil' => 'image|file',
            'nama' => 'required',
            'email' => 'required|email',
            'alamat' => 'required'
        ]);

        if ($request->file('foto_profil')) {
            if ($request->oldImage != null) {
                Storage::delete($request->oldImage);
            }
            $fotoProfile = $request->file('foto_profil')->store('foto-profil');

            User::where('id', $user->id)
                ->update([
                    'foto_profil' => $fotoProfile,
                    'nama' => $request->nama,
                    'email' => $request->email,
                    'alamat' => $request->alamat,
                    'pekerjaan' => $request->pekerjaan,
                    'no_hp' => $request->no_hp,
                    'role' => $request->role,
                ]);
        }
        User::where('id', $user->id)
            ->update([
                'nama' => $request->nama,
                'email' => $request->email,
                'alamat' => $request->alamat,
                'pekerjaan' => $request->pekerjaan,
                'no_hp' => $request->no_hp,
                'role' => $request->role,
            ]);

        return redirect('/user')->with('success', 'Sukses. Update Data Berhasil!');
    }
    public function editProfile()
    {
        return view('edit-userProfile', [
            'judul_halaman' => 'Admin | Edit Pengguna',
        ]);
    }

    public function updateProfile(Request $request)
    {
        $request->validate([
            'foto_profil' => 'image|file',
            'nama' => 'required',
            'email' => 'required|email',
            'alamat' => 'required'
        ]);

        if ($request->file('foto_profil')) {
            if ($request->gambarLama) {
                Storage::delete($request->gambarLama);
            }
            $fotoProfil = $request->file('foto_profil')->store('foto-profil');
            User::where('id', Auth::user()->id)
                ->update([
                    'foto_profil' => $fotoProfil,
                    'nama' => $request->nama,
                    'email' => $request->email,
                    'alamat' => $request->alamat,
                    'pekerjaan' => $request->pekerjaan,
                    'no_hp' => $request->no_hp,
                ]);
        }
        User::where('id', Auth::user()->id)
            ->update([
                'nama' => $request->nama,
                'email' => $request->email,
                'alamat' => $request->alamat,
                'pekerjaan' => $request->pekerjaan,
                'no_hp' => $request->no_hp,
            ]);

        return redirect('/user')->with('success', 'Sukses, Update Data Profil Berhasil!');
    }


    public function destroy(User $user)
    {
        if ($user->foto_profil) {
            Storage::delete($user->foto_profil);
        }
        User::destroy($user->id);
        return redirect('/user')->with('success', 'Data Berhasil Dihapus!');
    }
}
