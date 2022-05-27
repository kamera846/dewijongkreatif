<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\Blog;
use App\Models\Gallery;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{

    public function index()
    {
        return view('dashboard.blog', [
            'blogs' => Blog::latest('updated_at')->get(),
            'judul_halaman' => 'Admin | Data Postingan'
        ]);
    }


    public function create()
    {
        return view('dashboard.add-post', [
            'judul_halaman' => 'Admin | Tambah Postingan'
        ]);
    }


    public function store(Request $request)
    {
        $request->validate([
            'gambar_blog' => 'required|image|file',
            'judul' => 'required',
            'konten' => 'required',
        ]);

        $gambarBlog = $request->file('gambar_blog')->store('image_blog');

        Blog::create([
            'gambar_blog' => $gambarBlog,
            'judul' => $request->judul,
            'slug' => str::of($request->judul)->slug('-'),
            'penulis' => Auth::user()->nama,
            'konten' => $request->konten
        ]);

        return redirect('/dashboard/blog')->with('success', 'menambahkan');
    }


    public function show(Blog $blog)
    {
        return view('dashboard.detail-post', [
            'judul_halaman' => 'Admin | Detail Postingan',
            'blog' => $blog
        ]);
    }


    public function edit(Blog $blog)
    {
        return view('dashboard.edit-post', [
            'judul_halaman' => 'Admin | Edit Postingan',
            'blog' => $blog
        ]);
    }


    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'gambar_blog' => '|image|file',

        ]);

        if ($request->file('gambar_blog')) {
            if ($request->oldBlog) {
                Storage::delete($request->oldBlog);
            }
            $updateGambarBlog = $request->file('gambar_blog')->store('image_blog');
            Blog::where('id', $blog->id)
                ->update([
                    'gambar_blog' => $updateGambarBlog,
                    'judul' => $request->judul,
                    'slug' => str::of($request->judul)->slug('-'),
                    'konten' => $request->konten
                ]);
        };

        Blog::where('id', $blog->id)
            ->update([
                'judul' => $request->judul,
                'slug' => str::of($request->judul)->slug('-'),
                'konten' => $request->konten
            ]);

        return redirect('/dashboard/blog')->with('success', 'mengubah');
    }


    public function destroy(Blog $blog)
    {
        if ($blog->gambar_blog) {
            Storage::delete($blog->gambar_blog);
        }
        Blog::destroy($blog->id);
        return redirect('/dashboard/blog')->with('success', 'menghapus');
    }
}
