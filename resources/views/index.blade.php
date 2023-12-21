@extends('layouts.app')

@section('content')
        <!-- Hero Start -->
        <div class="container-fluid pt-5 bg-primary hero-header mb-4">
            <div class="container pt-5">
                <div class="row g-5 pt-5">
                    <div class="col-lg-6 align-self-center text-center text-lg-start mb-lg-5">
                        <div class="btn btn-sm border rounded-pill text-white px-3 mb-3 animated slideInRight">Beasiswa
                            Tuntas</div>
                        <h1 class="display-4 text-white mb-4 animated slideInRight">Daftarkan diri Anda</h1>
                        <p class="text-white mb-4 animated slideInRight">Selamat datang di Beasiswa Tuntas, sebuah platform
                            yang menawarkan peluang beasiswa dengan fokus pada dua kategori utama: Akademik dan
                            Non-Akademik. Kami berkomitmen untuk memberikan dukungan finansial kepada individu berbakat yang
                            memiliki semangat tinggi untuk mencapai prestasi di berbagai bidang.</p>
                        <a href="/pendaftaran" class="btn btn-light py-sm-3 px-sm-5 rounded-pill me-3 animated slideInRight">Daftar</a>
                    </div>
                    <div class="col-lg-6 align-self-end text-center text-lg-end">
                        <img class="img-fluid" src="img/hero-img.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
    
    
        <!-- Full Screen Search Start -->
    
        <!-- Full Screen Search End -->
    
    
        <!-- About Start -->
    
        <!-- About End -->
    
    
        <!-- Service Start -->
        <div class="container-fluid bg-light">
            <div class="container pb-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                        <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">Kategori Beasiswa</div>
                        <h1 class="mb-4">Kilasan Kategori Beasiswa di Beasiswa Tuntas</h1>
                        <p class="mb-4">Beasiswa Tuntas membuka pintu kesempatan bagi para mahasiswa untuk mengembangkan
                            potensi mereka melalui dua kategori utama: Akademik dan Non-Akademik. Setiap kategori dirancang
                            khusus untuk memberikan dukungan finansial dan pengakuan bagi pencapaian luar biasa, baik dalam
                            dunia pendidikan maupun di luarnya.</p>
                
                    </div>
                    <div class="col-lg-7">
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="row g-4">
                                    <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                                        <div
                                            class="service-item d-flex flex-column justify-content-center text-center rounded">
                                            <div class="service-icon btn-square">
                                                <i class="fa fa-graduation-cap fa-2x"></i>
                                            </div>
                                            <h5 class="mb-3">Syarat Beasiswa Akademik</h5>
                                            <p class="text-start">-IPK minimal 3 <br />
                                                -Mahasiswa aktif Semester 1 sampai 8<br />
                                                -Perguruan tinggi swasta atau negeri yang terdaftar di PDDikti<br />
                                                -Memiliki Sertifikat olimpiade sains internasional</p>
                                        </div>
                                    </div>
    
                                </div>
                            </div>
                            <div class="col-md-6 pt-md-4">
                                <div class="row g-4">
                                    <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                                        <div
                                            class="service-item d-flex flex-column justify-content-center text-center rounded">
                                            <div class="service-icon btn-square">
                                                <i class="fa fa-graduation-cap fa-2x"></i>
                                            </div>
                                            <h5 class="mb-3">Syarat Beasiswa Non-Akademik</h5>
                                            <p class="text-start">-IPK minimal 3 <br />
                                                -Mahasiswa aktif Semester 1 sampai 8<br />
                                                -Perguruan tinggi swasta atau negeri yang terdaftar di PDDikti<br />
                                               - Memiliki Prestasi Tingkat Nasional Bidang Olahraga</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->
@endsection