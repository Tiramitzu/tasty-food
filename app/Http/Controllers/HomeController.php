<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Berita $berita)
    {
        $fberita = $berita->latest()->first();
        $beritas = $berita->latest()->skip(1)->take(4)->get();
        $galeries = array_reverse(Storage::disk('public')->allFiles('galery'));
        $galeries = array_slice($galeries, 0, 6, true);
        $location = DB::table('kontak')->where('id', 1)->get('isi')->first();
        $phone = DB::table('kontak')->where('id', 2)->get('isi')->first();
        $email = DB::table('kontak')->where('id', 3)->get('isi')->first();

        $kontak = [
            'location' => $location->isi,
            'phone' => $phone->isi,
            'email' => $email->isi,
        ];

        return view('home', compact('fberita', 'beritas', 'galeries', 'kontak'));
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
