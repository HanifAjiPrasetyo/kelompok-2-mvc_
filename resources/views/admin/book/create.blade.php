@extends('admin.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Buat Data Buku</h1>
    </div>

    <div class="col-lg-8">
        <form action="{{ route('book.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="judul" class="form-label">Judul</label>
                <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" name="judul"
                    autofocus value="{{ old('judul') }}">
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="penulis" class="form-label">Penulis</label>
                <input type="text" class="form-control @error('penulis') is-invalid @enderror" id="penulis"
                    name="penulis" value="{{ old('penulis') }}">
                @error('penulis')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="penerbit" class="form-label">Penerbit</label>
                <input type="text" class="form-control @error('penerbit') is-invalid @enderror" id="penerbit"
                    name="penerbit" value="{{ old('penerbit') }}">
                @error('penulis')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="tahun_terbit" class="form-label">Tahun terbit</label>
                <input type="number" class="form-control @error('tahun_terbit') is-invalid @enderror" id="tahun_terbit"
                    name="tahun_terbit" value="{{ old('tahun_terbit') }}">
                @error('penulis')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="stok" class="form-label">Stok</label>
                <input type="number" class="form-control @error('stok') is-invalid @enderror" id="stok" name="stok"
                    value="{{ old('stok') }}">
                @error('penulis')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-sm btn-primary">Buat Data</button>
        </form>
    </div>
@endsection
