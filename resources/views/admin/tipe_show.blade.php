@extends('layouts.app')
@section('title','Detail Tipe Rumah')
@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-4 my-5">
            <div class="card my-3" style="width: 18rem;">
                <img src="{{ url('/data_file/'.$tipe->file)}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$tipe->nama_tipe}}</h5>
                    <p class="card-text" style="text-align:justify">{{$tipe->deskripsi_tipe}}</p>
                    <form action="/proyek/tipe_rumah/{{$tipe->tipe_id}}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger">Hapus Tipe</button>
                    </form> 
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="text-center">
                <h1>Edit Tipe Rumah</h1><br>
            </div>
            <form action="{{ url('/proyek/tipe_rumah/'.$tipe->tipe_id)}}" method="post" enctype="multipart/form-data">
            @method('patch')
            @csrf
                <div class="form-group">
                    <label for="gambar_proyek">Gambar Proyek</label><br>
                    <input type="file" name="file" value="{{$tipe->file}}">
                </div>
                <div class="form-group">
                    <label for="nama_tipe">Nama Tipe Rumah</label><br>
                    <input type="text" name="nama_tipe" class="form-control @error('nama_tipe') is-invalid @enderror" placeholder="Masukkan nama tipe rumah" value="{{ $tipe->nama_tipe}}">
                </div>
                <div class="form-group">
                    <label for="deskripsi_tipe">Deskripsi Tipe</label><br>
                    <textarea type="text" name="deskripsi_tipe" class="form-control @error('deskripsi_tipe') is-invalid @enderror" placeholder="Masukkan deskripsi tipe rumah">{{ $tipe->deskripsi_tipe}}</textarea>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="lantai">Lantai</label><br>
                            <select name="lantai" id="lantai" class="form-control" value="{{ $tipe->lantai}}"placeholder="Pilih Jumlah Lantai">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="kamar">Kamar</label><br>
                            <select name="kamar" id="kamar" class="form-control" value="{{ $tipe->kamar}}">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="3">4</option>
                                <option value="3">5</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="kamar_mandi">Kamar Mandi</label><br>
                            <select name="kamar_mandi" id="kamar_mandi" class="form-control" value="{{ $tipe->kamar_mandi}}">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="ruang_keluarga">Ruang Keluarga</label><br>
                            <select name="ruang_keluarga" id="ruang_keluarga" class="form-control" value="{{ $tipe->ruang_keluarga}}">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="dapur">Dapur</label><br>
                            <select name="dapur" id="dapur" class="form-control" value="{{ $tipe->dapur}}">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="garasi">Garasi</label><br>
                            <select name="garasi" id="garasi" class="form-control" value="{{ $tipe->garasi}}">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="gudang">Gudang</label><br>
                            <select name="gudang" id="gudang" class="form-control" value="{{$tipe->gudang}}">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                    </div>
                </div>  
                <input type="submit" value="Edit Tipe Rumah" class="btn btn-info"> 
                <a href="{{ url('/proyek/tipe_rumah') }}" class="btn btn-secondary">Kembali</a>
            </form>
            <div class="row justify-content-center">
                <div class="col-md-12 my-5">
                    <div class="text-center">
                        <h3>Denah Rumah</h3>
                        @if (\Session::has('success'))
                            <div class="alert alert-success">
                                <ul>
                                    <li>{!! \Session::get('success') !!}</li>
                                </ul>
                            </div>
                        @endif
                    </div>
                </div>
                @foreach($denah as $d)
                @if($tipe->tipe_id === $d->tipe_id)
                <div class="card my-3" style="width: 18rem; text-align:center;">
                    <img src="{{ url('/data_file/'.$d->file)}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <form action="/denah/{{$d->denah_id}}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger">Hapus Denah</button>
                        </form> 
                    </div>
                </div>
                @endif
                @endforeach
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12 my-5">
                    <div class="text-center">
                        <h3>Foto Progress</h3>
                        @if (\Session::has('msg'))
                            <div class="alert alert-success">
                                <ul>
                                    <li>{!! \Session::get('msg') !!}</li>
                                </ul>
                            </div>
                        @endif
                    </div>
                </div>
                @foreach($progress as $pg)
                @if($tipe->tipe_id === $pg->tipe_id)
                <div class="card my-3" style="width: 18rem; text-align:center;">
                    <img src="{{ url('/data_file/'.$pg->file)}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <form action="/progress/{{$pg->progress_id}}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger">Hapus Foto</button>
                        </form> 
                    </div>
                </div>
                @endif
                @endforeach
            </div>
        </div>
    </div>
    <div class="row">
        
    </div>
</div>
@endsection