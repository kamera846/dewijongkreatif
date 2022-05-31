<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{

    public function index()
    {
        return view('dashboard.gallery', [
            'judul_halaman' => 'Admin | Data Galeri',
            'galleries' => Gallery::latest()->get()
        ]);
    }


    public function create()
    {
        return view('dashboard.add-gallery', [
            'judul_halaman' => 'Admin | Tambah Galeri'
        ]);
    }


    public function store(Request $request)
    {
        $request->validate([
            'foto' => 'required|image|file',
            'judul' => 'required',
        ]);

        $foto = $request->file('foto')->store('gallery-images');

        Gallery::create([
            'foto' => $foto,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
        ]);
        return redirect('/dashboard/gallery')->with('success', 'menambahkan');
    }


    public function show($id)
    {
        //
    }


    public function edit(Gallery $gallery)
    {
        return view('dashboard.edit-gallery', [
            'gallery' => $gallery,
            'judul_halaman' => 'Admin | Edit Galeri'
        ]);
    }


    public function update(Request $request, Gallery $gallery)
    {
        $request->validate([
            'foto' => '|image|file',
        ]);

        if ($request->file('foto')) {
            if ($request->fotoLama) {
                Storage::delete($request->fotoLama);
            }
            $foto = $request->file('foto')->store('gallery-images');
            Gallery::where('id', $gallery->id)
                ->update([
                    'foto' => $foto,
                    'judul' => $request->judul,
                    'deskripsi' => $request->deskripsi,
                ]);
        }
        Gallery::where('id', $gallery->id)
            ->update([
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
            ]);
        return redirect('/dashboard/gallery')->with('success', 'mengubah');
    }


    public function destroy(Gallery $gallery)
    {
        if ($gallery->foto) {
            Storage::delete($gallery->foto);
        }
        gallery::destroy($gallery->id);
        return redirect('/dashboard/gallery')->with('success', 'menghapus');
    }
}
