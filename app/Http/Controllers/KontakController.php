<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KontakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $location = DB::table('kontak')->where('id', 1)->get('isi')->first();
        $phone = DB::table('kontak')->where('id', 2)->get('isi')->first();
        $email = DB::table('kontak')->where('id', 3)->get('isi')->first();

        $kontak = [
            'location' => $location->isi,
            'phone' => $phone->isi,
            'email' => $email->isi,
        ];

        return view('kontak', compact('kontak'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $nama)
    {
        $request->validate([
            'isi' => 'required',
        ]);

        DB::table('kontak')->where('nama', $nama)->update([
            'isi' => $request->isi,
            'updated_at' => now(),
        ]);

        return redirect()->route('tentang')->with('success', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
