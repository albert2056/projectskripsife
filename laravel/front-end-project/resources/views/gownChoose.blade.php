@extends('template')

@section('content')

<div class="container">
    <div class="row">
        <div class="col text-center mb-5" style="margin-top: 120px; margin-left: 20px">
            <h1 class="text-custom1">Pilih Busana Usher</h1>
        </div>
    </div>

    <div class="row mb-5" style="margin-left: 60px">
        <div class="col-md-6 mb-3">
            <div class="card shadow rounded-5" style="border-width: 0px; width: 535px; height: 650px">
                <h5 class="card-title text-center mt-5 btn-text-card">Gaun</h5>
                <div class="d-flex justify-content-center">
                    <img src="{{ asset('Assets/gaunImg.png') }}" style="width: 400px; height: 430px" class="card-img-top" alt="...">
                </div>
                <div class="card-body text-center">
                    <button class="btn btn-primary btn-block btn-card">Pilih Busana</button>
                </div>
            </div>
        </div>
        
        <div class="col-md-6 mb-3">
            <div class="card shadow rounded-5" style="border-width: 0px; width: 535px; height: 650px">
                <h5 class="card-title text-center mt-5 btn-text-card">Kebaya</h5>
                <div class="d-flex justify-content-center">
                    <img src="{{ asset('Assets/kebayaImg.png') }}" style="width: 400px; height: 430px" class="card-img-top" alt="...">
                </div>
                <div class="card-body text-center">
                    <button class="btn btn-primary btn-card">Pilih Busana</button>
                </div>
            </div>
        </div>
    </div>
    
</div>

@endsection
