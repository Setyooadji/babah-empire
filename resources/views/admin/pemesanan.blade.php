@extends('layouts.app')
@section('title','Pemesanan')
@section('content')
<div class="container">
    <h1 class="mt-5 text-center">Daftar Pemesanan</h1>
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <!-- <input class="form-control" id="myInput" type="text" placeholder="Search.."> -->
    <div style="overflow-x:auto">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Id</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">No. Hp</th>
                <th scope="col">Alamat</th>
                <th scope="col">Tempat, Tanggal Lahir</th>
                <th scope="col">No. KTP</th>
                <th scope="col">Proyek</th>
                <th scope="col">Tipe</th>
                <th scope="col">Tanggal Pemesanan</th>
                <th scope="col">Hapus</th>
                </tr>
            </thead>
            <tbody id="myTable">
                @foreach($pemesanan as $p)
                <tr>
                    <td>{{$p->id}}</td>
                    <td>{{$p->nama}}</td>
                    <td>{{$p->email}}</td>
                    <td>{{$p->no_hp}}</td>
                    <td>{{$p->alamat}}</td>
                    <td>{{$p->ttl}}</td>
                    <td>{{$p->no_ktp}}</td>
                    <td>{{$p->proyek}}</td>
                    <td>{{$p->tipe}}</td>
                    <td>{{$p->created_at}}</td>
                    <td>
                        <form action="{{ url('/pemesanan/'.$p->id)}}" method="post" enctype="multipart/form-data">
                            @method('delete')
                            @csrf
                            <input type="submit" value="Hapus" class="btn btn-danger"> 
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<script>
$(document).ready(function(){
    $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
    });
</script>
@endsection