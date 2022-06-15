<?php

namespace App\Http\Controllers;

use App\Models\Social;
use App\Models\Setting;
use App\Models\Section;
use Illuminate\Http\Request;

class Contact extends Controller
{
    function show()
    {
        $settings = Setting::get();
        foreach ($settings as $setting) {
            if ($setting->web_title !== null) {
                return view('contact', [
                    'judul_halaman' => 'Kontak Kami | ' . $setting->web_title,
                    'settings' => Setting::get(),
                    'socials' => Social::get(),
                    'sections' => Section::get()
                ]);
            } else {
                return view('contact', [
                    'judul_halaman' => 'Kontak Kami',
                    'settings' => Setting::get(),
                    'socials' => Social::get(),
                    'sections' => Section::get()

                ]);
            }
        }
    }

    function sendMail(Request $request)
    {

        $nama = ucwords($request->input('nama'));
        $email = $request->input('email');
        $pesan = $request->input('pesan');
        $nomor = $request->input('nomor');

        echo "<script>window.location.href = 'https://api.whatsapp.com/send?phone={$nomor}&text=Nama:%20{$nama}%0D%0AEmail:%20{$email}%0D%0APesan:%20{$pesan}'</script>";
        // header("location: https://api.whatsapp.com/send?phone={$nomor}&text=Nama:%20{$nama}%0D%0AEmail:%20{$email}%0D%0APesan:%20{$pesan}");   
    }
}
