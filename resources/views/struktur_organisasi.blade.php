{{-- Main Page --}}
@extends('layouts.main')

{{-- Konten --}}
@section('konten')
<div class="container struktur_organisasi">
    <div class="row">
        <h1 class="text-center">{{ $title }}</h1>
        <hr>
    </div>
    <div class="row mt-3">
        <div class="col-lg-12">
            <div class="row">
                <img src="img/struktur-organisasi/struktur_organisasi.png" class="img-fluid" alt="struktur-organisasi">
            </div>
        </div>
    </div>
</div>
@endsection