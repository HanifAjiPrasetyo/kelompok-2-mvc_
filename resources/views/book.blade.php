@extends('student.layouts.app')

@section('title')
    Buku
@endsection

@section('container')
    <section class="case-studies" id="case-studies-section">
        <div class="row grid-margin">
            <div class="col-12 text-center pb-5">
                <h2>Daftar Buku</h2>
                <h6 class="section-subtitle text-muted">Berikut daftar buku yang tersedia</h6>
            </div>
            @forelse ($books as $item)
                @php
                    $aosDelay = [200, 300, 400][array_rand([200, 300, 400])];
                    $bgColor = ['primary', 'danger', 'warning', 'success', 'info'][
                        array_rand(['primary', 'danger', 'warning', 'success', 'info'])
                    ];
                    $bookVar = ['coding-book', 'it-book', 'programming-book'][
                        array_rand(['coding-book', 'it-book', 'programming-book'])
                    ];
                    $modalId = 'borrowModal-' . $item->id;
                @endphp
                <div class="col-12 col-md-6 col-lg-3 stretch-card mb-3 mb-lg-0" data-aos="zoom-in"
                    data-aos-delay="{{ $aosDelay }}">
                    <div class="card color-cards">
                        <div class="card-body p-0">
                            <div class="bg-{{ $bgColor }} text-center card-contents">
                                <div class="card-image">
                                    <img src="https://source.unsplash.com/400x400?{{ $bookVar }}"
                                        class="case-studies-card-img" alt="" width="150">
                                </div>
                                <div class="card-desc-box d-flex align-items-center justify-content-around">
                                    <div>
                                        <h6 class="text-white pb-2 px-3">{{ $item->judul }}</h6>
                                        <button class="btn btn-success" data-toggle="modal"
                                            data-target="#{{ $modalId }}">Pinjam</button>
                                    </div>
                                </div>
                            </div>
                            <div class="card-details text-center pt-4">
                                <h6 class="m-0 pb-1">{{ $item->judul }}</h6>
                                <p class="m-0 pb-1 small">Stok : {{ $item->stok }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @auth
                    <div class="modal fade" id="{{ $modalId }}" tabindex="-1" role="dialog" aria-labelledby="modalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header mb-2">
                                    <h4 class="modal-title" id="modalLabel">Form Pinjam Buku</h4>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('borrow.store') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="book_id" id="book_id" value="{{ $item->id }}">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group mb-2">
                                                    <label for="header-member" class="h5 text-muted">Data Member</label>
                                                </div>
                                                <div class="form-group">
                                                    <label for="nama">Nama</label>
                                                    <input type="text" class="form-control" id="nama" name="nama"
                                                        value="{{ auth()->user()->name }}" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label for="nim">NIM</label>
                                                    <input type="text" class="form-control" id="nim" name="nim"
                                                        value="{{ auth()->user()->nim }}" readonly>
                                                </div>
                                                @if (!is_null($member))
                                                    <div class="form-group">
                                                        <label for="member_id">ID Member</label>
                                                        <input type="text" class="form-control" id="member_id"
                                                            name="member_id" value="{{ $member->id }}" readonly>
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group mb-2">
                                                    <label for="header-book" class="h5 text-muted">Data Buku</label>
                                                </div>
                                                <div class="form-group">
                                                    <label for="judul">Judul</label>
                                                    <input type="text" class="form-control" id="judul"
                                                        value="{{ $item->judul }}" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label for="penulis">Penulis</label>
                                                    <input type="text" class="form-control" id="penulis"
                                                        value="{{ $item->penulis }}" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label for="tahun_terbit">Tahun terbit</label>
                                                    <input type="text" class="form-control" id="tahun_terbit"
                                                        value="{{ $item->tahun_terbit }}" readonly>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-3">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="jumlah">Jumlah buku</label>
                                                    <input type="number" class="form-control" id="jumlah" name="jumlah"
                                                        autofocus>
                                                </div>
                                                <div class="form-group">
                                                    <label for="tgl_pinjam">Tanggal pinjam</label>
                                                    <input type="date" class="form-control" id="tgl_pinjam"
                                                        name="tgl_pinjam">
                                                </div>
                                                <div class="form-group">
                                                    <label for="tgl_kembali">Tanggal kembali</label>
                                                    <input type="date" class="form-control" id="tgl_kembali"
                                                        name="tgl_kembali" autofocus>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-success"
                                        onclick="return confirm('Data sudah benar?')">Pinjam</button>
                                    <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endauth
            @empty
                <div class="col-lg-10 text-center">
                    <div class="text-danger">Data buku tidak tersedia.</div>
                </div>
            @endforelse
        </div>
    </section>
@endsection
