<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        return view('dashboard.setting', [
            'judul_halaman' => 'Admin | Profile Setting',
            'settings' => Setting::get()
        ]);
    }
    public function update(Request $request, Setting $setting)
    {
        $request->validate([
            'logo' => 'image|file',
            'favicon' => 'image|file',
            'lokasi' => 'required',
            'email' => 'required',
            'telpon' => 'required',
            'web_title' => 'required'
        ]);
        if ($request->file('logo')) {
            if ($request->oldLogo != null) {
                Storage::delete($request->oldLogo);
            }
            // if ($request->oldFavicon != null) {
            //     Storage::delete($request->oldFavicon);
            // }
            $logo = $request->file('logo')->store('logo');
            // $favicon = $request->file('favicon')->store('favicon');
            Setting::where('id', $setting->id)
                ->update([
                    'lokasi' => $request->lokasi,
                    'email' => $request->email,
                    'telpon' => $request->telpon,
                    'logo' => $logo,
                    'web_title' => $request->web_title,
                ]);
        } else {
            Setting::where('id', $setting->id)
                ->update([
                    'lokasi' => $request->lokasi,
                    'email' => $request->email,
                    'telpon' => $request->telpon,
                    'web_title' => $request->web_title,
                ]);
        }
        if ($request->file('favicon')) {
            if ($request->oldFavicon != null) {
                Storage::delete($request->oldFavicon);
            }
            $favicon = $request->file('favicon')->store('favicon');
            Setting::where('id', $setting->id)
                ->update([
                    'lokasi' => $request->lokasi,
                    'email' => $request->email,
                    'telpon' => $request->telpon,
                    'favicon' => $favicon,
                    'web_title' => $request->web_title,
                ]);
        } else {
            Setting::where('id', $setting->id)
                ->update([
                    'lokasi' => $request->lokasi,
                    'email' => $request->email,
                    'telpon' => $request->telpon,
                    'web_title' => $request->web_title,
                ]);
        }


        return redirect('/dashboard/setting')->with('success', 'mengubah');
    }
}
