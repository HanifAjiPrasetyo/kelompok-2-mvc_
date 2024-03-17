@extends('student.layouts.app')

@section('title')
Daftar Peminjaman
@endsection

@section('container')
<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="table-responsive">
            <table class="table table-sm table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Judul Buku</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Tanggal Pinjam</th>
                        <th scope="col">Tanggal Kembali</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($borrows as $item)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $item->book->judul }}</td>
                        <td>{{ $item->jumlah }}</td>
                        <td>{{ $item->tgl_pinjam }}</td>
                        <td>{{ $item->tgl_kembali }}</td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center text-info h4">Anda belum meminjam buku.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
