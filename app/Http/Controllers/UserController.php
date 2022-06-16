<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Setting;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class UserController extends Controller
{
    public function upload($fotoProfil) {
        $uid = uniqid().".".$fotoProfil->getClientOriginalExtension();
        $fotoProfil->move(public_path('storage'), $uid);
        return $uid;
    }

    public function index()
    {
        if (Auth::user()->role === 'super-admin') {
            return view('dashboard.user', [
                'judul_halaman' => 'Admin | Data Pengguna',
                'users' => User::latest('updated_at')->get(),
                'settings' => Setting::get()
            ]);
        } else {
            return redirect('/dashboard');
        }
    }
    public function create()
    {
        if (Auth::user()->role === 'super-admin') {
            return view('dashboard.add-user', [
                'judul_halaman' => 'Admin | Tambah Pengguna',
                'settings' => Setting::get()
            ]);
        } else {
            return redirect('/dashboard');
        }
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
            // $fotoProfil = $request->file('foto_profil')->store('foto-profil');
            // $fotoProfil = $request->file('foto_profil');
            // $uid = uniqid().".".$fotoProfil->getClientOriginalExtension();
            // $fotoProfil->move(public_path('storage/foto-profil'), $uid);

            User::create([
                'foto_profil' => $this->upload($request->file('foto_profil')),
                'nama' => $request->nama,
                'email' => $request->email,
                'password' => hash::make($request->password),
                'alamat' => $request->alamat,
                'pekerjaan' => $request->pekerjaan,
                'no_hp' => $request->no_hp,
                'role' => $request->role,
            ]);
        } else {
            User::create([
                'nama' => $request->nama,
                'email' => $request->email,
                'password' => hash::make($request->password),
                'alamat' => $request->alamat,
                'pekerjaan' => $request->pekerjaan,
                'no_hp' => $request->no_hp,
                'role' => $request->role,
            ]);
        }

        return redirect('/dashboard/user')->with('success', 'menambahkan');
    }


    public function show(User $user)
    {
        if (Auth::user()->role === 'super-admin') {
            return view('dashboard.detail-user', [
                'judul_halaman' => 'Admin | Detail Pengguna',
                'user' => $user,
                'settings' => Setting::get()
            ]);
        } else {
            return redirect('/dashboard');
        }
    }

    public function edit(User $user)
    {
        if (Auth::user()->role === 'super-admin') {
            return view('dashboard.edit-user', [
                'judul_halaman' => 'Admin | Edit Pengguna',
                'user' => $user,
                'settings' => Setting::get()
            ]);
        } else {
            return redirect('/dashboard');
        }
    }
    public function update(Request $request, User $user)
    {
        $request->validate([
            'foto_profil' => 'image|file',
            'nama' => 'required',
            'email' => 'required|email',
            'alamat' => 'required',
        ]);

        $cekPassword = preg_replace('/\s+/', '', $request->password);

        if ($request->file('foto_profil')) {
            if ($request->oldImage != null) {
                Storage::delete($request->oldImage);
            }
            // $fotoProfile = $request->file('foto_profil')->store('foto-profil');

            User::where('id', $user->id)
                ->update([
                    'foto_profil' => $this->upload($request->file('foto_profil')),
                    'nama' => $request->nama,
                    'email' => $request->email,
                    'alamat' => $request->alamat,
                    'pekerjaan' => $request->pekerjaan,
                    'no_hp' => $request->no_hp,
                    'role' => $request->role,
                ]);
        } else {
            User::where('id', $user->id)
            ->update([
                'nama' => $request->nama,
                'email' => $request->email,
                'alamat' => $request->alamat,
                'pekerjaan' => $request->pekerjaan,
                'no_hp' => $request->no_hp,
                'role' => $request->role,
            ]);
        }

        if($cekPassword != null || $cekPassword != "") {
            User::where('id', $user->id)
            ->update([
                'password' => hash::make($request->password),
            ]);
        }

        return redirect('/dashboard/user')->with('success', 'mengubah');
    }
    public function editProfile()
    {
        return view('dashboard.edit-profile', [
            'judul_halaman' => 'Admin | Edit Profil',
            'settings' => Setting::get()
        ]);
    }

    public function updateProfile(Request $request)
    {
        $request->validate([
            'foto_profil' => 'image|file',
            'nama' => 'required',
            'email' => 'required|email',
            'alamat' => 'required',
        ]);

        if ($request->file('foto_profil')) {
            if ($request->gambarLama) {
                Storage::delete($request->gambarLama);
            }

            // $fotoProfil = $request->file('foto_profil')->store('foto-profil');

            // $fotoProfil = $request->file('foto_profil');
            // $uid = uniqid().".".$fotoProfil->getClientOriginalExtension();
            // $fotoProfil->move(public_path('storage/foto-profil'), $uid);
            
            User::where('id', Auth::user()->id)
                ->update([
                    'foto_profil' => $this->upload($request->file('foto_profil')),
                    'nama' => $request->nama,
                    'email' => $request->email,
                    'alamat' => $request->alamat,
                    'pekerjaan' => $request->pekerjaan,
                    'no_hp' => $request->no_hp,
                ]);
        } else {
            User::where('id', Auth::user()->id)
                ->update([
                    'nama' => $request->nama,
                    'email' => $request->email,
                    'alamat' => $request->alamat,
                    'pekerjaan' => $request->pekerjaan,
                    'no_hp' => $request->no_hp,
                ]);
        }

        $cekPassword = preg_replace('/\s+/', '', $request->password);

        if($cekPassword != null || $cekPassword != "") {
            User::where('id', Auth::user()->id)
            ->update([
                'password' => hash::make($request->password),
            ]);
        }

        return redirect('/dashboard')->with('success', 'memperbarui');
    }


    public function destroy(User $user)
    {
        if (Auth::user()->role === 'super-admin') {
            if ($user->foto_profil) {
                Storage::delete($user->foto_profil);
            }
            User::destroy($user->id);
            return redirect('/dashboard/user')->with('success', 'menghapus');
        } else {
            return redirect('/dashboard');
        }
    }
}
