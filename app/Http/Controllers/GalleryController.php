<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Social;
use App\Models\Gallery;
use App\Models\Section;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function upload($fotoProfil) {
        $uid = uniqid().".".$fotoProfil->getClientOriginalExtension();
        $fotoProfil->move(public_path('storage'), $uid);
        return $uid;
    }

    public function index()
    {
        return view('dashboard.gallery', [
            'judul_halaman' => 'Admin | Data Galeri',
            'galleries' => Gallery::latest('updated_at')->get(),
            'settings' => Setting::get()
        ]);
    }


    public function create()
    {
        return view('dashboard.add-gallery', [
            'judul_halaman' => 'Admin | Tambah Galeri',
            'settings' => Setting::get(),
        ]);
    }


    public function store(Request $request)
    {
        $request->validate([
            'foto' => 'required|image|file',
            'judul' => 'required',
        ]);

        // $foto = $request->file('foto')->store('gallery-images');

        Gallery::create([
            'foto' => $this->upload($request->file('foto')),
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
        ]);
        return redirect('/dashboard/gallery')->with('success', 'menambahkan');
    }


    public function edit(Gallery $gallery)
    {
        return view('dashboard.edit-gallery', [
            'gallery' => $gallery,
            'judul_halaman' => 'Admin | Edit Galeri',
            'settings' => Setting::get(),
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
            // $foto = $request->file('foto')->store('gallery-images');
            Gallery::where('id', $gallery->id)
                ->update([
                    'foto' => $this->upload($request->file('foto')),
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
    public function landingPage()
    {
        $settings = Setting::get();
        foreach ($settings as $setting) {
            if ($setting->web_title !== null) {
                return view('gallery', [
                    'judul_halaman' => 'Galeri | ' . $setting->web_title,
                    'galleries' => Gallery::latest('updated_at')->paginate(4),
                    'jumlah_galeri' => Gallery::count(),
                    'settings' => Setting::get(),
                    'socials' => Social::get(),
                    'sections' => Section::get(),
                    'newBlogs' => Blog::latest('updated_at')->get(),
                ]);
            } else {
                return view('gallery', [
                    'judul_halaman' => 'Galeri',
                    'galleries' => Gallery::latest('updated_at')->paginate(4),
                    'jumlah_galeri' => Gallery::count(),
                    'settings' => Setting::get(),
                    'socials' => Social::get(),
                    'sections' => Section::get(),
                    'newBlogs' => Blog::latest('updated_at')->get(),
                ]);
            }
        }
    }
}
