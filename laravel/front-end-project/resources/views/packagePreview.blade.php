@extends('template')

@section('content')

<div class="container" style="margin-bottom: 180px">
    <div class="row">
        <div class="col text-center mb-5" style="margin-top: 150px; margin-left: 20px">
            <h1 class="text-custom1">Paket Usher</h1>
        </div>
    </div>

    <div class="row" style="margin-left: 60px;">
        @foreach ($packages as $datas)
            <div class="col-md-6 mb-5">
                <div class="card shadow rounded-5" style="border-width: 0px; width: 535px; height: 650px">
                    <div class="d-flex justify-content-center">
                        <img src="{{ asset('Assets/paketCoupleImg.png') }}" style="width: 200px; height: 165px" class="card-img-top mt-5" alt="...">
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title text-center btn-text-card">{{ $datas['name'] }}</h5>
                        <div class="text-package mt-4 mb-5" style="text-align: left; margin: 0 auto; width: fit-content; font-size: 20px">
                            <ul>
                                @foreach ($datas['description'] as $desc)
                                    <li>{{ $desc }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection
