<?php

namespace App\Http\Controllers;

use App\Tipe;
use App\Proyek;
use Illuminate\Http\Request;

class TipeController extends Controller
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
        $tipe = Tipe::all();
        $proyek = Proyek::get();
        return view('admin.tipe_rumah', compact('tipe','proyek'));
    }
    public function upload(){
        $tipe = Tipe::get();
        $proyek = Proyek::get();
		return view('admin.tambah_tipe',['tipe' => $tipe, 'proyek' => $proyek]);
	}
	public function proses_upload(Request $request){
		$this->validate($request, [
			'file' => 'required|file|image|mimes:jpeg,png,jpg',
            'denah' => 'required|file|image|mimes:jpeg,png,jpg',
            'nama_tipe' => 'required',
            'deskripsi_tipe' => 'required',
            'lantai' => 'required',
            'kamar' => 'required',
            'kamar_mandi' => 'required',
            'ruang_keluarga' => 'required',
            'dapur' => 'required',
            'garasi' => 'required',
            'gudang' => 'required',
		]);

		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('file');
		$denah = $request->file('denah');
		$denah2 = $request->file('denah2');
		$nama_file = time()."_".$file->getClientOriginalName();
		$nama_file2 = time()."_".$denah->getClientOriginalName();
		$nama_file3 = time()."_".$denah2->getClientOriginalName();
      	// isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'data_file';
        $file->move($tujuan_upload,$nama_file);
        $denah->move($tujuan_upload,$nama_file2);
        $denah2->move($tujuan_upload,$nama_file3);
        $proyek = Proyek::all();
		Tipe::create([
            'file' => $nama_file,
            'denah' => $nama_file2,
            'denah2' => $nama_file3,
            'proyek_id' => $request->proyek_id,
			'nama_tipe' => $request->nama_tipe,
			'deskripsi_tipe' => $request->deskripsi_tipe,
			'lantai' => $request->lantai,
			'kamar' => $request->kamar,
			'kamar_mandi' => $request->kamar_mandi,
			'ruang_keluarga' => $request->ruang_keluarga,
			'dapur' => $request->dapur,
			'garasi' => $request->garasi,
			'gudang' => $request->gudang,
		]);

        return redirect('proyek/tipe_rumah')->with('status','Tipe Rumah Berhasil Ditambahkan!');
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
     * @param  \App\Tipe  $tipe
     * @return \Illuminate\Http\Response
     */
    public function show(Tipe $tipe)
    {
        $proyek = Proyek::all();
        return view('admin.tipe_show',compact('proyek','tipe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tipe  $tipe
     * @return \Illuminate\Http\Response
     */
    public function edit(Tipe $tipe)
    {
        return view('admin.edit_tipe',compact('tipe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tipe  $tipe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tipe $tipe)
    {
        $request->validate([
            'file' => 'required',
			'nama_tipe' => 'required',
			'deskripsi_tipe' => 'required',
			'lantai' => 'required',
			'kamar' => 'required',
			'denah' => 'required',
			'kamar_mandi' => 'required',
			'ruang_keluarga' => 'required',
			'dapur' => 'required',
			'garasi' => 'required',
			'gudang' => 'required',
        ]);
        // file
        $file = $request->file('file');
		$nama_file = time()."_".$file->getClientOriginalName();
      	 // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'data_file';
        $file->move($tujuan_upload,$nama_file);
        // denah 1
        $request->validate([
            'denah' => 'required',
        ]);
        $denah = $request->file('denah');
		$nama_file2 = time()."_".$denah->getClientOriginalName();
      	// isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'data_file';
        $denah->move($tujuan_upload,$nama_file2);
        // denah 2
        $denah2 = $request->file('denah2');
		$nama_file3 = time()."_".$denah2->getClientOriginalName();
      	// isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'data_file';
        $denah2->move($tujuan_upload,$nama_file3);


        Tipe::where('tipe_id',$tipe->tipe_id)->update([
            'file' => $nama_file,
            'nama_tipe' => $request->nama_tipe,
            'deskripsi_tipe' => $request->deskripsi_tipe,
            'lantai' => $request->lantai,
            'kamar' => $request->kamar,
            'denah' => $request->nama_file2,
            'denah2' => $request->nama_file3,
            'kamar_mandi' => $request->kamar_mandi,
            'ruang_keluarga' => $request->ruang_keluarga,
            'dapur' => $request->dapur,
            'garasi' => $request->garasi,
            'gudang' => $request->gudang,
        ]);
        return redirect('/proyek/tipe_rumah')->with('status','Tipe Rumah Berhasil Diedit!');
    }
    // public function updatedenah(Request $request, Tipe $tipe)
    // {
        
    //     Tipe::where('tipe_id',$tipe->tipe_id)->update([
    //         'denah' => $nama_file,

    //     ]);
    //     return redirect('/proyek/tipe_rumah')->with('status','Denah Berhasil ditambahkan!');
    // }
    // public function updateprogress(Request $request, Tipe $tipe)
    // {
    //     $request->validate([
    //         'progress' => 'required',
    //     ]);
    //     $progress = $request->file('progress');

	// 	$nama_file = time()."_".$progress->getClientOriginalName();

    //   	        // isi dengan nama folder tempat kemana file diupload
	// 	$tujuan_upload = 'data_file';
	// 	$progress->move($tujuan_upload,$nama_file);
    //     Tipe::where('tipe_id',$tipe->tipe_id)->update([
    //         'progress' => $nama_file,

    //     ]);
    //     return redirect('/proyek/tipe_rumah')->with('status','Progress Berhasil ditambahkan!');
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tipe  $tipe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tipe $tipe)
    {
        Tipe::destroy($tipe->tipe_id);
        return redirect('proyek/tipe_rumah')->with('status','Tipe Rumah Berhasil Dihapus!');
    }
}
