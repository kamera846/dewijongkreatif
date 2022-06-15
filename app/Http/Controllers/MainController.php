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
    public function index(Setting $setting)
    {
        $sections = Section::get();
        // foreach ($sections as $section) {
        //     if ($section->slug === 'corousel-1') {
        //         $slug1 = $section->slug;
        //         $isActive1 = $section->isActive;
        //         $image1 = $section->cover;
        //         $title1 = $section->title;
        //         $description1 = $section->description;
        //     } elseif ($section->slug === 'corousel-2') {
        //         $slug2 = $section->slug;
        //         $isActive2 = $section->isActive;
        //         $image2 = $section->cover;
        //         $title2 = $section->title;
        //         $description2 = $section->description;
        //     } else {
        //         $slug3 = $section->slug;
        //         $isActive3 = $section->isActive;
        //         $image3 = $section->cover;
        //         $title3 = $section->title;
        //         $description3 = $section->description;
        //     }
        // }
        return view('index', [
            'judul_halaman' => $setting->web_title,
            'blogs' => Blog::latest('updated_at')->limit(3)->get(),
            'jumlah_blog' => Blog::count(),
            'galleries' => Gallery::latest('updated_at')->limit(4)->get(),
            'jumlah_galeri' => Gallery::count(),
            'settings' => Setting::get(),
            'socials' => Social::get(),
            'sections' => Section::get(),
            // 'slug1' => $slug1,
            // 'isActive1' => $isActive1,
            // 'image1' => $image1,
            // 'title1' => $title1,
            // 'description1' => $description1,
            // 'slug2' => $slug2,
            // 'isActive2' => $isActive2,
            // 'image2' => $image2,
            // 'title2' => $title2,
            // 'description2' => $description2,
            // 'slug3' => $slug3,
            // 'isActive3' => $isActive3,
            // 'image3' => $image3,
            // 'title3' => $title3,
            // 'description3' => $description3,
        ]);
    }
}
