<?php

namespace App\Http\Controllers;

use App\pages;
use App\Marketing;
use App\Proyek;
use App\Tipe;
use App\Promo;
use App\Pemesanan;
use App\Denah;
use App\Progress;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        $marketing = Marketing::all();
        $proyek = Proyek::all();
        $tipe = Tipe::all();
        $promo = Promo::all();
        $pemesanan = Pemesanan::all();
        return view('beranda', compact('marketing','proyek','tipe','promo'));
    }
    public function marketing()
    {
        $marketing = Marketing::all();
        return view('marketing', compact('marketing'));
    }
    public function properti()
    {
        $tipe = Tipe::all();
        $proyek = Proyek::all();
        return view('properti', compact('tipe','proyek'));
    }
    public function kontak()
    {
        $tipe = Tipe::all();
        $proyek = Proyek::all();
        return view('kontak', compact('tipe','proyek'));
    }
    public function mkt_info(Marketing $marketing)
    {
        return view('marketing_info', compact('marketing'));
    }
    public function pyk_info(proyek $proyek)
    {
        $tipe = Tipe::all();
        return view('proyek_info', compact('proyek','tipe'));
    }
    public function prt_info(Tipe $tipe)
    {
        $denah = Denah::all();
        $progress = Progress::all();
        return view('properti_info', compact('tipe','denah','progress'));
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $marketing = Marketing::all();
        $proyek = Proyek::all();
        $tipe = Tipe::all();
        $promo = Promo::all();
        $pemesanan = Pemesanan::all();
        return view('kontak', compact('proyek','tipe','promo','marketing','pemesanan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'no_hp' => 'required',
            'alamat' => 'required',
            'ttl' => 'required',
            'no_ktp' => 'required',
            'proyek' => 'required',
            'tipe' => 'required',
        ]);
        Pemesanan::create($request->all());
        return redirect('ktk')->with('status','Pendaftaran Berhasil!');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\pages  $pages
     * @return \Illuminate\Http\Response
     */
    public function show(pages $pages)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\pages  $pages
     * @return \Illuminate\Http\Response
     */
    public function edit(pages $pages)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\pages  $pages
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pages $pages)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\pages  $pages
     * @return \Illuminate\Http\Response
     */
    public function destroy(pages $pages)
    {
        //
    }
}
