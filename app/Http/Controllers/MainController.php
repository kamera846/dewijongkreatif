<?php


namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\Blog;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Gallery;
use App\Models\Section;
use App\Models\Setting;
use App\Models\Social;

class MainController extends Controller
{
    public function index()
    {
        $setting = Setting::first();
        return view('index', [
            'judul_halaman' => $setting->web_title,
            'blogs' => Blog::latest('updated_at')->limit(3)->get(),
            'newBlogs' => Blog::latest('updated_at')->get(),
            'jumlah_blog' => Blog::count(),
            'galleries' => Gallery::latest('updated_at')->limit(4)->get(),
            'jumlah_galeri' => Gallery::count(),
            'settings' => Setting::get(),
            'socials' => Social::get(),
            'sections' => Section::get(),
        ]);
    }
}
