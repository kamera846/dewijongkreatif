<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Social;
use App\Models\Setting;
use App\Models\Section;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{

    public function upload($fotoProfil) {
        $uid = uniqid().".".$fotoProfil->getClientOriginalExtension();
        $fotoProfil->move(public_path('storage'), $uid);
        return $uid;
    }

    public function index()
    {
        return view('dashboard.blog', [
            'blogs' => Blog::latest('updated_at')->get(),
            'settings' => Setting::get(),
            'judul_halaman' => 'Admin | Data Postingan'
        ]);
    }

    public function create()
    {
        return view('dashboard.add-post', [
            'judul_halaman' => 'Admin | Tambah Postingan',
            'settings' => Setting::get(),
        ]);
    }


    public function store(Request $request)
    {
        $request->validate([
            'gambar_blog' => 'required|image|file',
            'judul' => 'required',
            'konten' => 'required',
        ]);

        // $gambarBlog = $request->file('gambar_blog')->store('image_blog');

        Blog::create([
            'gambar_blog' => $this->upload($request->file('gambar_blog')),
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
            'blog' => $blog,
            'settings' => Setting::get(),
        ]);
    }


    public function edit(Blog $blog)
    {
        return view('dashboard.edit-post', [
            'judul_halaman' => 'Admin | Edit Postingan',
            'blog' => $blog,
            'settings' => Setting::get(),
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
            // $updateGambarBlog = $request->file('gambar_blog')->store('image_blog');
            Blog::where('id', $blog->id)
                ->update([
                    'gambar_blog' => $this->upload($request->file('gambar_blog')),
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

    public function landingPage()
    {
        $settings = Setting::get();
        foreach ($settings as $setting) {
            if ($setting->web_title !== null) {
                return view('blog', [
                    'blogs' => Blog::latest('updated_at')->cari()->paginate(3),
                    'judul_halaman' => 'Blog | '  . $setting->web_title,
                    'jumlah_blog' => Blog::cari()->count(),
                    'recentPosts' => Blog::latest('updated_at')->limit(3)->get(),
                    'settings' => Setting::get(),
                    'socials' => Social::get(),
                    'sections' => Section::get(),
                    'newBlogs' => Blog::latest('updated_at')->get(),
                ]);
            } else {
                return view('blog', [
                    'blogs' => Blog::latest('updated_at')->cari()->paginate(3),
                    'judul_halaman' => 'Blog',
                    'jumlah_blog' => Blog::cari()->count(),
                    'recentPosts' => Blog::latest('updated_at')->limit(3)->get(),
                    'settings' => Setting::get(),
                    'socials' => Social::get(),
                    'sections' => Section::get(),
                    'newBlogs' => Blog::latest('updated_at')->get(),
                ]);
            }
        }
    }


    public function postDetails(Blog $blog)
    {
        $settings = Setting::get();
        foreach ($settings as $setting) {
            if ($setting->web_title !== null) {
                return view('blog-details', [
                    'judul_halaman' => $blog->judul . ' | '  . $setting->web_title,
                    'blog' => $blog,
                    'recentPosts' => Blog::latest('updated_at')->limit(3)->get(),
                    'tes' => 'oke',
                    'settings' => Setting::get(),
                    'socials' => Social::get(),
                    'newBlogs' => Blog::latest('updated_at')->get(),
                    'sections' => Section::get()
                ]);
            } else {
                return view('blog-details', [
                    'judul_halaman' => $blog->judul,
                    'blog' => $blog,
                    'recentPosts' => Blog::latest('updated_at')->limit(3)->get(),
                    'tes' => 'oke',
                    'settings' => Setting::get(),
                    'socials' => Social::get(),
                    'newBlogs' => Blog::latest('updated_at')->get(),
                    'sections' => Section::get()
                ]);
            }
        }
    }
}
