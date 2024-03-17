@extends('student.layouts.app')

@section('title')
    Daftar Peminjaman
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
            <h3>Daftar Peminjaman</h3>
            <h6 class="section-subtitle text-muted">Berikut daftar peminjaman buku Anda</h6>
        </div>
        <div class="col-lg-12">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Judul Buku</th>
                            <th scope="col">Jumlah</th>
                            <th scope="col">Tanggal Pinjam</th>
                            <th scope="col">Tanggal Kembali</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($borrows as $item)
                            @php
                                $modalId = 'returnModal-' . $item->id;
                            @endphp
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $item->book->judul }}</td>
                                <td>{{ $item->jumlah }}</td>
                                <td>{{ Carbon::create($item->tgl_pinjam)->isoFormat('dddd, D MMMM Y') }}</td>
                                <td>{{ Carbon::create($item->tgl_kembali)->isoFormat('dddd, D MMMM Y') }}</td>
                                @if ($currentDate >= $item->tgl_kembali && $item->return)
                                    <td>
                                        <a href="{{ route('return-book.denda') }}" class="btn btn-sm btn-success btnModal"
                                            data-toggle="modal" data-target="#{{ $modalId }}"
                                            data-id={{ $item->id }}>
                                            Kembalikan
                                        </a>
                                    </td>
                                @else
                                    <td class="small">
                                        Sudah atau belum saatnya mengembalikan buku
                                    </td>
                                @endif
                            </tr>
                            <div class="modal fade" id="{{ $modalId }}" tabindex="-1" role="dialog"
                                aria-labelledby="modalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header mb-2">
                                            <h4 class="modal-title" id="modalLabel">Form Pengembalian Buku</h4>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('return-book.store') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="borrow_id" value="{{ $item->id }}">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group mb-2">
                                                            <label for="header-member" class="h5 text-muted">Data
                                                                Mahasiswa</label>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="nama">Nama</label>
                                                            <input type="text" class="form-control" id="nama"
                                                                name="nama" value="{{ auth()->user()->name }}" readonly>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="nim">NIM</label>
                                                            <input type="text" class="form-control" id="nim"
                                                                name="nim" value="{{ auth()->user()->nim }}" readonly>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="member_id">ID Member</label>
                                                            <input type="text" class="form-control" id="member_id"
                                                                name="member_id" value="{{ $item->member_id }}" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group mb-2">
                                                            <label for="header-book" class="h5 text-muted">Data Buku</label>
                                                        </div>
                                                        <input type="hidden" name="book_id" value="{{ $item->book->id }}">
                                                        <div class="form-group">
                                                            <label for="judul">Judul</label>
                                                            <input type="text" class="form-control" id="judul"
                                                                value="{{ $item->book->judul }}" readonly>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="jumlah">Jumlah buku</label>
                                                            <input type="number" class="form-control" id="jumlah"
                                                                value="{{ $item->jumlah }}" readonly>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="tgl_pinjam">Tanggal pinjam</label>
                                                            <input type="text" class="form-control" id="tgl_pinjam"
                                                                value="{{ Carbon::create($item->tgl_pinjam)->isoFormat('dddd, D MMMM Y') }}"
                                                                readonly>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="tgl_kembali">Tanggal kembali</label>
                                                            <input type="text" class="form-control" id="tgl_kembali"
                                                                name="tgl_kembali"
                                                                value="{{ Carbon::create($item->tgl_kembali)->isoFormat('dddd, D MMMM Y') }}"
                                                                readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-8">
                                                        <div class="form-group">
                                                            <label for="telat">Keterlambatan (hari)</label>
                                                            <input type="number" class="form-control" id="telat"
                                                                name="telat"
                                                                value="{{ $currentDate->diffInDays(Carbon::parse($item->tgl_kembali)) }}"
                                                                readonly>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="denda">Denda (hari x 10.000)</label>
                                                            <input type="text" class="form-control denda"
                                                                id="denda" name="denda" value="" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-success"
                                                onclick="return confirm('Kembalikan?')">Kembalikan</button>
                                            <button type="button" class="btn btn-light"
                                                data-dismiss="modal">Close</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
