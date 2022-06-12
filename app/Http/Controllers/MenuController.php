<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{
    public function index()
    {
        return view('dashboard.menu', [
            'menus' => Menu::latest()->get(),
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
            'menu' => $menu
        ]);
    }
    public function update(Request $request, Menu $menu)
    {

        $request->validate([
            'cover' => 'image|file'
        ]);

        if ($request->hasFile('cover')) {
            $files = $request->file('cover');

            foreach ($files as $file) {
                $name = rand(1, 999);
                $extension = $file->getClientOriginalExtension();

                $newName = $name . '.' . $extension;

                $size = $file->getClientSize();
                Storage::putFileAs('public', $file, $newName);
                $data = [
                    'path' => 'storage/' . $newName,
                    'size' => $size,
                ];

                Menu::where('slug', $menu->slug)
                    ->update([
                        'description' => $request->description,
                        'cover' => $data,
                    ]);
            }
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
