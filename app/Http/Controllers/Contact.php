<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Contact extends Controller
{
    function show(){
        return view('contact', [
            'judul_halaman' => 'Kontak Kami | Desa Wisata Loha',
        ]);
    }

    function sendMail(Request $request){
        
        $nama = ucwords($request->input('nama'));
        $email = $request->input('email');
        $pesan = $request->input('pesan');
        $nomor = $request->input('nomor');
        
        echo "<script>window.location.href = 'https://api.whatsapp.com/send?phone={$nomor}&text=Nama:%20{$nama}%0D%0AEmail:%20{$email}%0D%0APesan:%20{$pesan}'</script>";
        
    }
}