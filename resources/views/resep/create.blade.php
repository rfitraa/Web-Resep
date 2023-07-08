@extends('layouts.app')

@section('content')
<div class="container">
    <h4 class="mb-3" style="color: #547794;"><b>Tulis Resepmu ...</b></h4>
    <form method="POST" action="/resep" class="mb-5" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="judul" class="form-label"><b>Judul</b></label>
            <input type="judul" class="form-control @error('judul') is-invalid @enderror" id="judul" name="judul" required autofocus value="{{old('judul')}}">
            @error('judul')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
        <label for="desc" class="form-label"><b>Deskripsi</b></label>
            <textarea class="form-control @error('desc') is-invalid @enderror" id="desc" name="desc" required autofocus value="{{old('desc')}}" rows="3"></textarea>
            @error('desc')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="bahan" class="form-label">Bahan</label>
            @error('bahan')
            <p class="text-danger">{{ $message }}</p>
            @enderror
            <input id="bahan" type="hidden" name="bahan" value="{{ old('bahan') }}">
            <trix-editor input="bahan"></trix-editor>
        </div>

        <div class="mb-3">
            <label for="langkah" class="form-label">Langkah</label>
            @error('langkah')
            <p class="text-danger">{{ $message }}</p>
            @enderror
            <input id="langkah" type="hidden" name="langkah" value="{{ old('langkah') }}">
            <trix-editor input="langkah"></trix-editor>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Upload Foto Makanan</label>
            <img class="img-preview img-fluid mb-3 col-sm-4">
            <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image"
                onchange="previewImage()">
            @error('image')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Terbitkan Resep</button>
    </form>
</div>
@endsection