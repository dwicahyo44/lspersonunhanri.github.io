{{-- Main Page --}}
@extends('layouts.main')

{{-- Konten --}}
@section('konten')
    <div class="container visi_misi">
        <div class="row">
            <h1 class="text-center">{{ $title }}</h1>
        </div>
        <div class="row mt-3">
            <div class="col-lg-6">
                <div class="row">
                    <h3 class="text-center">Visi</h3>
                    <hr>
                </div>
                <div class="row">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Menjadi lembaga sertifikasi person yang unggul, profesional, dan kompeten berdasarkan pada nilai-nilai Praditya, Wiratama, Nagara Bhakti.</li>
                      </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <h3 class="text-center">Misi</h3>
                    <hr>
                </div>
                <div class="row">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">1. Menyelenggarakan sertifikasi kompetensi person.</li>
                        <li class="list-group-item">2. Meningkatkan pengelolaan sistem manajemen mutu pelaksanaan sertifikasi person secara konsisten dan berkesinambungan.</li>
                        <li class="list-group-item">3. Meningkatkan kemampuan seluruh personil Lembaga Sertifikasi Person Unhan RI dan asesor Kompetensi yang semakin berkualitas dan berkompetensi sesuai dengan tuntutan Dunia Profesional.</li>
                        <li class="list-group-item">4. Meningkatkan dan memelihara sarana dan prasarana sesuai dengan ketentuan dan tuntutan skema sertifikasi.</li>
                        <li class="list-group-item">5. Mengambangkan skema sertifikasi linier yang semakin meningkat kebutuhannya.</li>
                        <li class="list-group-item">6. Mengembangkan perangkat uji sesuai tuntutan skema sertifikasi.</li>
                        <li class="list-group-item">7. Mengembangkan jejaring dan kerjasama dengan pemangku kepentingan.</li>
                        <li class="list-group-item">8. Mengembangkan dan menjamin hasil kerja yang handal, terpercaya, responsif  dan berkualitas yang berbasis pada SNI ISO/IEC 17024:2012 sebagai Lembaga Sertifikasi Person.</li>
                        <li class="list-group-item">9. Mengembangkan sister informasi sertifikasi person dengan jelas dan mudah dipahami.</li>
                      </ul>
                </div>
            </div>
        </div>
    </div>
@endsection