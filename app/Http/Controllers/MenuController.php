<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{
    public function index()
    {
        return view('dashboard.menu', [
            'menus' => Menu::latest()->get(),
            'settings' => Setting::get(),
            'judul_halaman' => 'Admin | Data Menu'
        ]);
    }

    public function show($id)
    {
        //
    }

    public function edit(Menu $menu)
    {
        return view('dashboard.edit-menu', [
            'judul_halaman' => 'Admin | Edit Menu',
            'menu' => $menu,
            'settings' => Setting::get(),
            'covers' => json_decode($menu->cover)
        ]);
    }
    public function update(Request $request, Menu $menu)
    {
        date_default_timezone_set("Asia/Jakarta");

        $request->validate([
            'cover[]' => 'image|file'
        ]);

        if ($request->hasFile('cover')) {
            $files = $request->file('cover');

            $stringRand = "ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
            $imageArray = [];

            foreach ($files as $index => $file) {
                // if ($index < 3) {
                $name = date("YmdHis") . substr(str_shuffle($stringRand), 10);
                $extension = $file->getClientOriginalExtension();

                $newName = $name . '.' . $extension;
                Storage::putFileAs('public', $file, $newName);
                $imageArray[$index] = 'public/' . $newName;
                // }
            }

            // dd($imageArray);

            Menu::where('slug', $menu->slug)
                ->update([
                    'title' => $request->title,
                    'description' => $request->description,
                    'isActive' => $request->isActive,
                    'cover' => $imageArray,
                ]);

            // foreach ($files as $file) {
            //     $name = rand(1, 999);
            //     $extension = $file->getClientOriginalExtension();

            //     $newName = $name . '.' . $extension;
            //     Storage::putFileAs('public', $file, $newName);
            //     $data = [
            //         'path' => 'storage/' . $newName,
            //     ];

            //     Menu::where('slug', $menu->slug)
            //         ->update([
            //             'title' => $request->title,
            //             'description' => $request->description,
            //             'cover' => $data,
            //         ]);
            // }
        } else {
            // dd($request);
            Menu::where('slug', $menu->slug)
                ->update([
                    'title' => $request->title,
                    'description' => $request->description,
                    'isActive' => $request->isActive,
                ]);
        }



        // $covers = [];
        // if ($request->file('cover')) {
        //     // if ($request->oldCover != null) {
        //     //     Storage::delete($request->oldCover);
        //     // }
        //     // foreach ($request->file('cover') as $cover) {
        //     //     $cover = $request->file('foto_profil')->store('foto-profil');
        //     //     $covers[] = $cover;
        //     // }

        //     Menu::where('slug', $menu->slug)
        //         ->update([
        //             'description' => $request->description,
        //             'cover' => $cover,
        //         ]);
        // }
        // Menu::where('slug', $menu->slug)
        //     ->update([
        //         'description' => $request->description,
        //     ]);

        return redirect('/dashboard/menu')->with('success', 'mengubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
