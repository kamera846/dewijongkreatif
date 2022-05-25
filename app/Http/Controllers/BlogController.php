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
        return view('blog', [
            'blogs' => Blog::latest('updated_at')->get(),
            'judul_halaman' => 'Admin | Data Blog'
        ]);
    }


    public function create()
    {
        return view('add-post', [
            'judul_halaman' => 'Admin | Tambah Data Blog'
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

        return redirect('/blog')->with('success', 'Post berhasil ditambahkan');
    }


    public function show(Blog $blog)
    {
        return view('detail-post', [
            'judul_halaman' => 'Admin | Detail Post',
            'blog' => $blog
        ]);
    }


    public function edit(Blog $blog)
    {
        return view('edit-post', [
            'judul_halaman' => 'Admin | Edit Post',
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
            Blog::where('slug', $blog->slug)
                ->update([
                    'gambar_blog' => $updateGambarBlog,
                    'judul' => $request->judul,
                    'slug' => str::of($request->judul)->slug('-'),
                    'konten' => $request->konten
                ]);
        };

        Blog::where('slug', $blog->slug)
            ->update([
                'judul' => $request->judul,
                'slug' => str::of($request->judul)->slug('-'),
                'konten' => $request->konten
            ]);

        return redirect('/blog')->with('success', 'Post berhasil diupdate');
    }


    public function destroy(Blog $blog)
    {
        if ($blog->gambar_blog) {
            Storage::delete($blog->gambar_blog);
        }
        Blog::destroy($blog->id);
        return redirect('/blog')->with('success', 'Data Berhasil Dihapus!');
    }
}
