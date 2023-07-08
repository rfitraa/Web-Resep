@extends('layouts.app')

@section('content')
<div class="container">
    <h4><b>Resep Terbaru</b></h4>    
    <div class="row">
    @foreach($resep as $resep)
        <div class="col-md-4 p-2">
            <div class="card">
                <img src="{{ asset('storage/'.$resep->image) }}" class="card-img-top" alt="Gambar Resep">
                <div class="card-body">
                    <p class="card-text mb-1" style="color: #C2C9CD; ">2 Orang Menyukai ini</p>
                    <h5 class="card-title" style="font-weight: bold; "><a style="text-decoration: none; color: #547794;" href="/resep/{{$resep->id}}">{{ $resep->judul }}</a></h5>
                    <p class="card-text text-black">{{ $resep->desc }}</p>
                    <a href="#" class="btn text-white col-md-12" style="background-color: #C2C9CD;">Suka</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>    
</div>
@endsection