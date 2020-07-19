@extends('layouts.app')
@section('title','Denah Rumah')
@section('content')
<div class="container">
    <h1 class="mt-5 text-center">Tambah Denah Rumah</h1>
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <div class="row mt-5">
        <div class="col-md-6">
            <img src="{{ URL::asset('/images/denah.svg') }}" alt="" width=100% height=100%>
        </div>
        <div class="col-md-6">
            <form action="/denah/proses" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="gambar_tipe">Gambar Denah Rumah</label><br>
                    <input type="file" name="file">
                </div>
                <div class="form-group">
                    <label for="tipe_id">Nama Tipe Rumah</label><br>
                    <select name="tipe_id" id="tipe_id" class="form-control"value="{{ old('tipe_id')}}">
                        @foreach($tipe as $t)
                        <option value="{{$t->tipe_id}}">{{$t->nama_tipe}}</option>
                        @endforeach
                    </select>
                </div>
                <input type="submit" value="Tambahkan" class="btn btn-primary">
            </form>
        </div>
    </div>
</div>
@endsection