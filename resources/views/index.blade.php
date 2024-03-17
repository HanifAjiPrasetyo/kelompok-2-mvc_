@extends('student.layouts.app')

@section('title')
Home
@endsection

@section('banner')
<div class="banner">

    @if (session()->has('success'))
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
    @endif

    @if (session()->has('error'))
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
    @endif

    <div class="container">
        <h1 class="font-weight-semibold">Perpustakaan <br>Kelompok 2 Aly</h1>
        <div class="my-5">
            <a class="btn btn-primary" href="/book">Pinjam Sekarang</a>
        </div>
        <img src="{{ asset('images/library.png') }}" alt="" class="img-fluid" width="500">
    </div>
</div>
@endsection
