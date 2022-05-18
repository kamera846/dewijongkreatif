<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\Blog;
use Illuminate\Http\Request;


class BlogController extends Controller
{

    public function index()
    {
        return view('blog', [
            'judul_halaman' => 'Admin | Data Blog',
            'blogs' => Blog::latest()->get()
        ]);
    }


    public function create()
    {
        return view('create-blog');
    }

    public function store(Request $request)
    {
        $request->validate([
            'gambar_blog' => 'required|image|file',
            'judul' => 'required',
            'slug' => 'required|unique:blogs',
            'penulis' => 'required',
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

        return redirect('/blog')->with('success', 'Blog berhasil dipost');
    }

    public function show(Blog $blog)
    {
        return view('detail-blog', [
            'judul_halaman' => 'Detail Blog',
            'Blogs' => $blog
        ]);
    }

    public function edit(Blog $blog)
    {
        return view('edit-blog', [
            'judul_halaman' => 'Edit Blog',
            'blogs' => $blog
        ]);
    }
    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'gambar_blog' => 'image|file',
            'judul' => 'required',
            'slug' => 'required',
            'penulis' => 'required',
            'konten' => 'required'
        ]);
        dd('berhasil');

        // if ($request->file('gambar_blog')) {
        //     if ($request->gambarLama) {
        //         Storage::delete($request->gambarLama);
        //     }
        // }
        $gambarBlog = $request->file('gambar_blog')->store('image_blog');
        Blog::where('id', $blog->id)
            ->update([
                'gambar_blog' => $gambarBlog,
                'judul' => $request->judul,
                'slug' => str::of($request->judul)->slug('-'),
                'penulis' => Auth::user()->nama,
                'konten' => $request->konten
            ]);

        return redirect('/blog')->with('success', 'Blog berhasil diupdate');
    }

    public function destroy(Blog $blog)
    {
        Blog::destroy($blog->id);

        return redirect('/blog')->with('success', 'Blog berhasil dihapus');
    }
}
