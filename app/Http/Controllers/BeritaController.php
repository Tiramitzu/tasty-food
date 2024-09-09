<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $id = DB::table('beritas')->orderBy('created_at','desc')->take(1)->pluck('id');
        $hberita = DB::table('beritas')->latest()->first();
        $beritas = DB::table('beritas')->latest()->whereNotIn('id', $id)->paginate(8);
        $location = DB::table('kontak')->where('id', 1)->get('isi')->first();
        $phone = DB::table('kontak')->where('id', 2)->get('isi')->first();
        $email = DB::table('kontak')->where('id', 3)->get('isi')->first();

        $kontak = [
            'location' => $location->isi,
            'phone' => $phone->isi,
            'email' => $email->isi,
        ];

        return view('berita.index', compact('hberita', 'beritas', 'kontak'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (Auth::check()) {

            $galeries = Storage::disk('public')->allFiles('galery');

            return view('berita.create', compact('galeries'));
        }

        return redirect()->route('berita.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (Auth::check()) {

            $request->validate([
                'title' => 'required',
                'content' => 'required',
                'img-type' => 'required',
            ], [
                'title.required' => ' berita tidak boleh kosong',
                'content.required' => ' berita tidak boleh kosong',
                'img-type.required' => ' tidak boleh kosong',
            ]);

            $slug = BeritaController::slugify($request->title);

            if ($request->get('img-type') == 'file') {
                $request->validate([
                    'file' => ['required', 'image', 'mimes:png,jpg,jpeg,svg', 'max:2048']
                ], [
                    'file.required' => ' tidak boleh kosong',
                    'file.image' => ' harus berupa gambar',
                    'file.mimes' => ' harus berformat png, jpg, jpeg, atau svg',
                    'file.max' => ' maksimal 2MB',
                ]);

                $gambar = $request->file('file');

                $tujuan_upload = 'news';

                $gambar->move($tujuan_upload, $slug);

                $image = 'news/' . $slug;
            } else if ($request->get('img-type') == 'url') {
                $request->validate([
                    'url' => 'required',
                ], [
                    'url.required' => ' tidak boleh kosong',
                ]);
                if (file_put_contents('news/' . $slug, fopen($request->url, 'r')))
                    $image = 'news/' . $slug;
                else
                    return redirect()->route('berita.create')->with('error', 'URL gambar tidak valid');
            } else if ($request->get('img-type') == 'galery') {
                $request->validate([
                    'galery' => 'required',
                ], [
                    'galery.required' => ' tidak boleh kosong',
                ]);

                $image = $request->galery;
            } else {
                return redirect()->route('berita.create')->with('error', 'Gambar tidak valid');
            }

            DB::table('beritas')->insert([
                'judul' => $request->title,
                'slug' => $slug,
                'gambar' => $image,
                'isi' => $request->content,
                'created_at' => now(),
            ]);

            return redirect()->route('berita.show', $slug)->with('success', 'Berita berhasil ditambahkan');
        }

        return redirect()->route('berita.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(String $slug, Request $request)
    {
        $berita = Berita::where('slug', $slug)->first();

        if (!$berita)
            return redirect()->route('berita.index')->with('error', 'Berita tidak ditemukan');

        return view('berita.show', compact('berita'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $slug)
    {
        if (Auth::check()) {

            $galeries = Storage::disk('public')->allFiles('galery');
            $berita = DB::table('beritas')->where('slug', $slug)->first();

            if (!$berita)
                return redirect()->route('berita.index')->with('error', 'Berita tidak ditemukan');

            return view('berita.edit', compact('berita', 'galeries'));
        }

        return redirect()->route('berita.index');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(String $slug, Request $request)
    {
        if (Auth::check()) {

            $request->validate([
                'title' => 'required',
                'content' => 'required',
            ], [
                'title.required' => ' berita tidak boleh kosong',
                'content.required' => ' berita tidak boleh kosong',
            ]);

            $cur = DB::table('beritas')->where('slug', $slug)->first();
            if ($request->title == $cur->judul)
                $slug = $cur->slug;
            else
                $slug = BeritaController::slugify($request->title);

            if ($request->get('img-type') == 'file') {
                $request->validate([
                    'file' => ['required', 'image', 'mimes:png,jpg,jpeg,svg', 'max:2048']
                ], [
                    'file.required' => ' tidak boleh kosong',
                    'file.image' => ' harus berupa gambar',
                    'file.mimes' => ' harus berformat png, jpg, jpeg, atau svg',
                    'file.max' => ' maksimal 2MB',
                ]);

                $gambar = $request->file('file');

                $tujuan_upload = 'news';

                $gambar->move($tujuan_upload, $slug);

                $image = 'news/' . $slug;

                Storage::disk('public')->delete($cur->gambar);
            } else if ($request->get('img-type') == 'url') {
                $request->validate([
                    'url' => 'required',
                ], [
                    'url.required' => ' tidak boleh kosong',
                ]);

                if (file_put_contents('news/' . $slug, fopen($request->url, 'r'))) {
                    $image = 'news/' . $slug;
                    Storage::disk('public')->delete($cur->gambar);
                } else
                    return redirect()->route('news.edit')->with('error', 'URL gambar tidak valid');
            } else if ($request->get('img-type') == 'galery') {
                $request->validate([
                    'galery' => 'required',
                ], [
                    'galery.required' => ' tidak boleh kosong',
                ]);

                $image = $request->galery;
            } else {
                $image = $cur->gambar;
            }

            DB::table('beritas')->where('slug', $cur->slug)->update([
                'judul' => $request->title,
                'slug' => $slug,
                'gambar' => $image,
                'isi' => $request->content,
                'updated_at' => now(),
            ]);

            return redirect()->route('berita.show', $slug)->with('success', 'Berita berhasil diubah');
        }

        return redirect()->route('berita.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $slug)
    {
        if (Auth::check()) {

            $berita = DB::table('beritas')->where('slug', $slug)->first();

            DB::table('beritas')->where('slug', $slug)->delete();

            Storage::disk('public')->delete($berita->gambar);

            return redirect()->route('berita.index')->with('success', 'Berita berhasil dihapus');
        }

        return redirect()->route('berita.index');
    }

    public function berita_paginate(Request $request){
        $id = DB::table('beritas')->orderBy('created_at','desc')->take(1)->pluck('id');
        $beritas = DB::table('beritas')->latest()->whereNotIn('id', $id)->paginate(8);

        return view('berita.pagination', compact('beritas'))->render();
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

        return $text . $divider . time();
    }
}
