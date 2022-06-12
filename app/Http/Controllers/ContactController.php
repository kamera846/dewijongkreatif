<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('dashboard.contact', [
            'judul_halaman' => 'Admin | Data Kontak',
            'contacts' => Contact::get()
        ]);
    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        $request->validate([
            'logo' => 'image|file',
            'lokasi' => 'required',
            'email' => 'required',
            'telpon' => 'required'
        ]);
        if ($request->file('logo')) {
            if ($request->oldLogo != null) {
                Storage::delete($request->oldLogo);
            }
            $logo = $request->file('logo')->store('logo');
            Contact::where('id', $contact->id)
                ->update([
                    'lokasi' => $request->lokasi,
                    'email' => $request->email,
                    'telpon' => $request->telpon,
                    'logo' => $logo
                ]);
        } else {
            Contact::where('id', $contact->id)
                ->update([
                    'lokasi' => $request->lokasi,
                    'email' => $request->email,
                    'telpon' => $request->telpon,
                ]);
        }


        return redirect('/dashboard/contact')->with('success', 'mengubah');
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
