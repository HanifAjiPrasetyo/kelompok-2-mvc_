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
        <div class="col-12 col-md-6 col-lg-3 stretch-card mb-3 mb-lg-0" data-aos="zoom-in">
            <div class="card color-cards">
                <div class="card-body p-0">
                    <div class="bg-primary text-center card-contents">
                        <div class="card-image">
                            <img src="images/Group95.svg" class="case-studies-card-img" alt="">
                        </div>
                        <div class="card-desc-box d-flex align-items-center justify-content-around">
                            <div>
                                <h6 class="text-white pb-2 px-3">Know more about Online marketing</h6>
                                <button class="btn btn-white">Read More</button>
                            </div>
                        </div>
                    </div>
                    <div class="card-details text-center pt-4">
                        <h6 class="m-0 pb-1">Online Marketing</h6>
                        <p>Seo, Marketing</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3 stretch-card mb-3 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="card color-cards">
                <div class="card-body p-0">
                    <div class="bg-warning text-center card-contents">
                        <div class="card-image">
                            <img src="images/Group108.svg" class="case-studies-card-img" alt="">
                        </div>
                        <div class="card-desc-box d-flex align-items-center justify-content-around">
                            <div>
                                <h6 class="text-white pb-2 px-3">Know more about Web Development</h6>
                                <button class="btn btn-white">Read More</button>
                            </div>
                        </div>
                    </div>
                    <div class="card-details text-center pt-4">
                        <h6 class="m-0 pb-1">Web Development</h6>
                        <p>Developing, Designing</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3 stretch-card mb-3 mb-lg-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="card color-cards">
                <div class="card-body p-0">
                    <div class="bg-violet text-center card-contents">
                        <div class="card-image">
                            <img src="images/Group126.svg" class="case-studies-card-img" alt="">
                        </div>
                        <div class="card-desc-box d-flex align-items-center justify-content-around">
                            <div>
                                <h6 class="text-white pb-2 px-3">Know more about Web Designing</h6>
                                <button class="btn btn-white">Read More</button>
                            </div>
                        </div>
                    </div>
                    <div class="card-details text-center pt-4">
                        <h6 class="m-0 pb-1">Web Designing</h6>
                        <p>Designing, Developing</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3 stretch-card" data-aos="zoom-in" data-aos-delay="600">
            <div class="card color-cards">
                <div class="card-body p-0">
                    <div class="bg-success text-center card-contents">
                        <div class="card-image">
                            <img src="images/Group115.svg" class="case-studies-card-img" alt="">
                        </div>
                        <div class="card-desc-box d-flex align-items-center justify-content-around">
                            <div>
                                <h6 class="text-white pb-2 px-3">Know more about Software Development</h6>
                                <button class="btn btn-white">Read More</button>
                            </div>
                        </div>
                    </div>
                    <div class="card-details text-center pt-4">
                        <h6 class="m-0 pb-1">Software Development</h6>
                        <p>Developing, Designing</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
