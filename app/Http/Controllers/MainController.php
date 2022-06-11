<?php 


namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\Blog;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Gallery;

class MainController extends Controller
{
    public function index()
    {
        return view('index', [
            'judul_halaman' => 'Desa Wisata Loha',
            'blogs' => Blog::latest('updated_at')->limit(4)->get(),
            'galleries' => Gallery::latest('updated_at')->limit(4)->get(),
        ]);
    }
}
