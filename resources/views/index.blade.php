@extends('student.layouts.app')

@section('title')
Home
@endsection

@section('banner')
<div class="banner">
    <div class="container">
        <h1 class="font-weight-semibold">Perpustakaan <br>Kelompok 2 Aly</h1>
        <div class="my-5">
            <a class="btn btn-primary" href="/book">Pinjam Sekarang</a>
        </div>
        <img src="{{ asset('images/library.png') }}" alt="" class="img-fluid" width="500">
    </div>
</div>
@endsection
