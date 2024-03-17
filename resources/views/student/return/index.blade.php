@extends('student.layouts.app')

@section('title')
    Daftar Pengembalian
@endsection

@php
    use Carbon\Carbon;
    use Carbon\CarbonInterface;

    $currentDate = Carbon::now();
    setlocale(LC_TIME, 'id_ID');
@endphp

@section('container')
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
    <div class="row justify-content-center">
        <div class="col-12 text-center pb-3">
            <h3>Daftar Pengembalian</h3>
            <h6 class="section-subtitle text-muted">Berikut daftar pengembalian buku Anda</h6>
        </div>
        <div class="col-lg-10">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">ID Pinjam</th>
                            <th scope="col">Judul Buku</th>
                            <th scope="col">Jumlah</th>
                            <th scope="col">Tanggal Pinjam</th>
                            <th scope="col">Tanggal Dikembalikan</th>
                            <th scope="col">Denda</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($returns as $item)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $item->borrow->id }}</td>
                                <td>{{ $item->borrow->book->judul }}</td>
                                <td>{{ $item->borrow->jumlah }}</td>
                                <td>{{ Carbon::create($item->borrow->tgl_pinjam)->isoFormat('dddd, D MMMM Y') }}</td>
                                <td>{{ Carbon::create($item->tgl_pengembalian)->isoFormat('dddd, D MMMM Y') }}</td>
                                <td>IDR {{ $item->denda }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center text-info h4">Anda belum mengembalikan buku.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
