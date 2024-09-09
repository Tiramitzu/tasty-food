<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $galeries = array_reverse(Storage::disk('public')->allFiles('galery'));
        $galeries1 = array_slice($galeries, 0, 4, true);

        $total = count($galeries);
        $per_page = 8;
        $current_page = $request->input("page") ?? 1;

        $starting_point = ($current_page * $per_page) - $per_page;

        $galeries2 = array_slice($galeries, $starting_point, $per_page, true);

        $galeries2 = new LengthAwarePaginator($galeries2, $total, $per_page, $current_page, [
            'path' => Paginator::resolveCurrentPath(),
            'query' => $request->query(),
        ]);

        $location = DB::table('kontak')->where('id', 1)->get('isi')->first();
        $phone = DB::table('kontak')->where('id', 2)->get('isi')->first();
        $email = DB::table('kontak')->where('id', 3)->get('isi')->first();

        $kontak = [
            'location' => $location->isi,
            'phone' => $phone->isi,
            'email' => $email->isi,
        ];

        return view('galeri.index', compact('galeries', 'galeries1', 'galeries2', 'kontak'));
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
        if (Auth::check()) {
            if ($request->get('img-type') == 'file') {
                $request->validate([
                    'file' => ['required', 'image', 'mimes:png,jpg,jpeg,svg', 'max:2048'],
                ], [
                    'file.required' => 'Gambar tidak boleh kosong',
                    'file.image' => 'File harus berupa gambar',
                    'file.mimes' => 'Gambar harus berformat png, jpg, jpeg, atau svg',
                    'file.max' => 'Ukuran gambar maksimal 2 MB',
                ]);

                $gambar = $request->file('file');

                $file = $gambar->getClientOriginalName();

                $tujuan_upload = 'galery';

                $filename = pathinfo($file, PATHINFO_FILENAME);
                $extension = pathinfo($file, PATHINFO_EXTENSION);

                $gambarName = GaleriController::slugify($filename) . '.' . $extension;

                $gambar->move($tujuan_upload, $gambarName);

                return redirect()->route('galeri.index')->with('success', 'Gambar berhasil ditambahkan');
            } else if ($request->get('img-type') == 'url') {
                $request->validate([
                    'url' => 'required',
                ], [
                    'url.required' => 'URL gambar tidak boleh kosong',
                ]);
                $gambarName = GaleriController::slugify($request->url);

                if (file_put_contents('galery/' . $gambarName, fopen($request->url, 'r')))
                    return redirect()->route('galeri.index')->with('success', 'Gambar berhasil ditambahkan');
                else
                    return redirect()->route('galeri.index')->with('error', 'URL gambar tidak valid');
            }

            Session::flash('error', 'Gambar gagal ditambahkan');

            return redirect()->back();
        }

        return redirect()->route('galeri.index');
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
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $name)
    {
        if (Auth::check()) {
            Storage::disk('public')->delete("galery/" . $name);

            return redirect()->route('galeri.index')->with('success', 'Gambar berhasil dihapus');
        }
    }

    public function galeri_paginate(Request $request)
    {
        $galeries = Storage::disk('public')->allFiles('galery');

        $galeries2 = array_reverse($galeries);

        $total = count($galeries2);
        $per_page = 8;
        $current_page = $request->input("page") ?? 1;

        $starting_point = ($current_page * $per_page) - $per_page;

        $galeries2 = array_slice($galeries2, $starting_point, $per_page, true);

        $galeries2 = new LengthAwarePaginator($galeries2, $total, $per_page, $current_page, [
            'path' => Paginator::resolveCurrentPath(),
            'query' => $request->query(),
        ]);

        return view('galeri.paginate', compact('galeries2'));
    }

    /**
     * Generate slug from string.
     */
    public function slugify($text, string $divider = '-')
    {
        // replace non letter or digits by divider
        $text = preg_replace('~[^\pL\d]+~u', $divider, $text);

        // transliterate
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

        // remove unwanted characters
        $text = preg_replace('~[^-\w]+~', '', $text);

        // trim
        $text = trim($text, $divider);

        // remove duplicate divider
        $text = preg_replace('~-+~', $divider, $text);

        // lowercase
        $text = strtolower($text);

        if (empty($text)) {
            return 'n-a';
        }

        return time() . $divider . $text;
    }
}
