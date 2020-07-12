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
    <div class="row mt-5">
        <div class="col-md-6">
            <img src="{{ URL::asset('/images/pemesanan.svg') }}" alt="" width=100% height=100%>
        </div>
        <div class="col-md-6">
            <div class="list-group ">
                @foreach($pemesanan as $p)
                <a href="{{ url('/pemesanan/'.$p->id)}}" class="list-group-item list-group-item-action ">{{$p->nama}}</a>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection