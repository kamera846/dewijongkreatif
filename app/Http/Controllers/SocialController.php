<?php

namespace App\Http\Controllers;

use App\Models\Social;
use App\Models\Setting;
use Illuminate\Http\Request;

class SocialController extends Controller
{
    public function index()
    {
        return view('dashboard.social', [
            'judul_halaman' => 'Admin | Profil Sosial Media',
            'socials' => Social::latest()->get(),
            'settings' => Setting::get()
        ]);
    }


    public function create(Social $social)
    {
        return view('dashboard.add-social', [
            'judul_halaman' => 'Admin | Tambah Pengguna',
            'social' => $social,
            'settings' => Setting::get()
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'tipe_sosmed' => 'required|unique:socials',
            'link_sosmed' => 'required',
        ]);

        Social::create([
            'tipe_sosmed' => $request->tipe_sosmed,
            'link_sosmed' => $request->link_sosmed,
        ]);

        return redirect('/dashboard/social')->with('success', 'menambahkan');
    }

    public function edit(Social $social)
    {
        return view('dashboard.edit-social', [
            'judul_halaman' => 'Admin | Edit Sosial Media',
            'social' => $social,
            'settings' => Setting::get()
        ]);
    }

    public function update(Request $request, Social $social)
    {
        $request->validate([
            'tipe_sosmed' => 'required',
            'link_sosmed' => 'required',
        ]);

        Social::where('id', $social->id)
            ->update([
                'tipe_sosmed' => $request->tipe_sosmed,
                'link_sosmed' => $request->link_sosmed
            ]);

        return redirect('/dashboard/social')->with('success', 'mengubah');
    }

    public function destroy(Social $social)
    {
        Social::destroy($social->id);
        return redirect('/dashboard/social')->with('success', 'menghapus');
    }
}
