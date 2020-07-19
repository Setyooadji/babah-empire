<?php

namespace App\Http\Controllers;

use App\Progress;
use App\Tipe;
use Illuminate\Http\Request;

class ProgressController extends Controller
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
		return view('admin.progress',['tipe' => $tipe]);
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
        $proyek = Tipe::all();
		Progress::create([
            'file' => $nama_file,
            'tipe_id' => $request->tipe_id,
		]);

        return redirect('progress')->with('status','Foto Progress Rumah Berhasil Ditambahkan!');
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
     * @param  \App\Progress  $progress
     * @return \Illuminate\Http\Response
     */
    public function show(Progress $progress)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Progress  $progress
     * @return \Illuminate\Http\Response
     */
    public function edit(Progress $progress)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Progress  $progress
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Progress $progress)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Progress  $progress
     * @return \Illuminate\Http\Response
     */
    public function destroy(Progress $progress)
    {
        Progress::destroy($progress->progress_id);
        return redirect()->back()->with('msg','Foto Progress Rumah Berhasil Dihapus!');
    }
}
