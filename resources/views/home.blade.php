{{-- Main Page --}}
@extends('layouts.main')

{{-- Konten --}}
@section('konten')
        {{-- Carousel --}}
        <div id="carouselExampleFade" class="carousel slide carousel-fade">
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="img/carousel/slide1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h2>Lokakarya</h2>
                <h5>Melakukan Lokakarya Sebelum Melakukan Uji Sertifikasi</h5>
            </div>
            </div>
            <div class="carousel-item">
            <img src="img/carousel/slide2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h2>Lokakarya Secara Offline</h2>
                <h5>Supaya Peserta Mendapatkan Hasil Yang Maksimal</h5>
            </div>
            </div>
            <div class="carousel-item">
            <img src="img/carousel/slide3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h2>Uji Sertifikasi</h2>
                <h5>Uji Sertifikasi Secara Offline maupun Online</h5>
            </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>
        {{-- Carousel End --}}
        
    {{-- Div Container --}}
    
    <div class="container konten">
        {{-- Skema Sertifikasi End --}}
        <div class="row skema-sertifikasi">
            <h1 class="text-center skema">Skema Sertifikasi</h1>
            <hr>
        </div>
        <div class="row mt-3">
            <div class="col-md-6">
                <h3 class="text-center wkbn">Wawasan Kebangsaan</h3>
                <hr class="hr-wk">
                <p style="font-weight: 400">Cara pandang bangsa Indonesia tentang diri dan lingkungannya mengutamakan persatuan dan kesatuan bangsa serta kesatuan wilayah yang dilandasi Pancasila, Undang-Undang Dasar Negara Republik Indonesia Tahun 1945, Bhinneka Tunggal Ika, dan Negara Kesatuan Republik Indonesia. </p>
            </div>
            <div class="col-md-6">
                <h3 class="text-center wkbn">Bela Negara</h3>
                <hr class="hr-bn">
                <p style="font-weight: 400">Kesadaran dan tindakan warga negara yang diterapkan karena cinta mereka terhadap Negara Kesatuan Republik Indonesia yang berdasar pada Pancasila dan Undang-Undang Dasar 1945 untuk memastikan kelangsungan hidup bangsa dan negara.</p>
            </div>
        </div>
        {{-- Skema Sertifikasi End --}}

        {{-- Pemateri Lokakarya --}}
        <div class="row pemateri-lokakarya">
            <h1 class="text-center skema">Pemateri Lokakarya</h1>
            <hr>
        </div>
        <div class="row mt-3 pemateri">
            <div class="col-lg-3">
                <div class="card">
                    <img class="card-img-top mx-auto" src="img/pemateri/male.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title text-center">Rujito Asmoro</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
            </div>
            <div class="col-lg-3 ">
                <div class="card">
                    <img class="card-img-top mx-auto" src="img/pemateri/male.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title text-center">Jeffri Panggabean</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
            </div>
            <div class="col-lg-3 ">
                <div class="card">
                    <img class="card-img-top mx-auto" src="img/pemateri/male.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title text-center">Ruby Alamsyah</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
            </div>
            <div class="col-lg-3 ">
                <div class="card">
                    <img class="card-img-top mx-auto" src="img/pemateri/male.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title text-center">Ernes Djony</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
            </div>
        </div>
        {{-- Pemateri Lokakarya End --}}



    </div>
    {{-- Div Container --}}

    
    
    
    
@endsection