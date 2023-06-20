{{-- Main Page --}}
@extends('layouts.main')

{{-- Konten --}}
@section('konten')
    <div class="container sejarah">
        <div class="row">
            <h1 class="text-center">{{ $title }}</h1>
            <hr>
        </div>
        <div class="row mt-3">
            <div class="col-lg-8 offset-2">
                <div class="row justify-content-center">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Asperiores ratione aut maxime rerum alias rem ipsum porro veritatis incidunt illo sequi ea id fugiat, fuga beatae dignissimos quisquam delectus? Voluptatibus.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection