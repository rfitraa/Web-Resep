@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-12" >
        <img src="{{ asset('storage/'.$resep->image) }}" class="card-img-top mb-3" alt="Gambar Resep">
    </div>
    <h5 class="card-title mb-2" style="font-weight: bold; font-size: 28px;">{{ $resep->judul }}</h5>
    <p class="card-text text-black mb-3" style="font-size: 18px;">{{ $resep->desc }}</p>
    <h3 class="card-title mb-3"><b>Bahan-Bahan</b></h5>
    <p class="card-text text-black mb-3">{!! $resep->bahan !!}</p>
    <h3 class="card-title mb-3"><b>Langkah Pembuatan</b></h5>
    <p class="card-text text-black mb-3">{!! $resep->langkah !!}</p>
</div>
@endsection