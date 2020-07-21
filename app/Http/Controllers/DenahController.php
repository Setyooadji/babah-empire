<?php

namespace App\Http\Controllers;

use App\Denah;
use App\Tipe;
use App\Proyek;
use Illuminate\Http\Request;

class DenahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        //
    }
    public function upload(){
        $tipe = Tipe::get();
        $proyek = Proyek::get();
		return view('admin.denah',['tipe' => $tipe,'proyek' => $proyek]);
    }
    public function proses_upload(Request $request){
		$this->validate($request, [
			'file' => 'required|file|image|mimes:jpeg,png,jpg',
		]);

		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('file');
		$nama_file = time()."_".$file->getClientOriginalName();
      	// isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'data_file';
        $file->move($tujuan_upload,$nama_file);
        $tipe = Tipe::all();
        $proyek = Proyek::all();
		Denah::create([
            'file' => $nama_file,
            'tipe_id' => $request->tipe_id,
		]);

        return redirect('denah')->with('status','Denah Rumah Berhasil Ditambahkan!');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
     * @param  \App\Denah  $denah
     * @return \Illuminate\Http\Response
     */
    public function show(Denah $denah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Denah  $denah
     * @return \Illuminate\Http\Response
     */
    public function edit(Denah $denah)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Denah  $denah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Denah $denah)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Denah  $denah
     * @return \Illuminate\Http\Response
     */
    public function destroy(Denah $denah)
    {
        Denah::destroy($denah->denah_id);
        return redirect()->back()->with('success','Denah Rumah Berhasil Dihapus!');
    }
}
