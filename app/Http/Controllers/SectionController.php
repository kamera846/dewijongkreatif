<?php

namespace App\Http\Controllers;

use App\Models\Section;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SectionController extends Controller
{
    public function upload($fotoProfil) {
        $uid = uniqid().".".$fotoProfil->getClientOriginalExtension();
        $fotoProfil->move(public_path('storage'), $uid);
        return $uid;
    }

    public function index()
    {
        return view('dashboard.menu', [
            'sections' => Section::latest()->get(),
            'settings' => Setting::get(),
            'judul_halaman' => 'Admin | Data Section'
        ]);
    }

    public function edit(Section $section)
    {
        return view('dashboard.edit-menu', [
            'judul_halaman' => 'Admin | Edit Menu',
            'section' => $section,
            'settings' => Setting::get(),
            'covers' => json_decode($section->cover)
        ]);
    }

    public function update(Request $request, Section $section)
    {
        date_default_timezone_set("Asia/Jakarta");

        $request->validate([
            'cover[]' => 'image|file'
        ]);

        if ($request->hasFile('cover')) {
            $files = $request->file('cover');

            // $stringRand = "ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
            $imageArray = [];

            foreach ($files as $index => $file) {
                // if ($index < 3) {
                // $name = date("YmdHis") . substr(str_shuffle($stringRand), 10);
                // $extension = $file->getClientOriginalExtension();

                // $newName = $name . '.' . $extension;
                // Storage::putFileAs('public', $file, $newName);
                $imageArray[$index] = $this->upload($file);
                // }
            }

            // dd($imageArray);

            Section::where('slug', $section->slug)
                ->update([
                    'title' => $request->title,
                    'description' => $request->description,
                    'isActive' => $request->isActive,
                    'cover' => $imageArray,
                ]);
        } else {
            Section::where('slug', $section->slug)
                ->update([
                    'title' => $request->title,
                    'description' => $request->description,
                    'isActive' => $request->isActive,
                ]);
        }

        return redirect('/dashboard/section')->with('success', 'mengubah');
    }
}
