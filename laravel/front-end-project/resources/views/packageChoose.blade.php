@extends('template')

@section('content')

<div class="container" style="margin-bottom: 180px">
    <div class="row">
        <div class="col text-center mb-5" style="margin-top: 150px; margin-left: 20px">
            <h1 class="text-custom1">Pilih Paket Usher</h1>
        </div>
    </div>

    <div class="row mb-5" style="margin-left: 60px">
        <form action="{{route('choosePackage')}}" method="POST" class="d-flex">
            @csrf
            @foreach ($packages as $index => $datas)
            <div class="col-md-6 mb-3" style="margin-bottom: 10px">
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
                        <h5 class="card-title text-center btn-text-card" style="position: absolute; bottom: 115px; left: 50%; transform: translateX(-50%)">RP. {{ $datas['price'] }}</h5>
                        <button type="submit" name="packageId" type="number" value={{ $datas['id'] }} class="btn btn-primary btn-block btn-card" style="position: absolute; bottom: 35px; left: 50%; transform: translateX(-50%);">Pilih Paket</button>
                    </div>
                </div>
            </div>
            @if (($index + 1) % 2 == 0)
                </form></div><div class="row mb-5" style="margin-left: 60px"><form action="{{route('choosePackage')}}" method="POST" class="d-flex">@csrf
            @endif
            @endforeach
        </form>
    </div>
</div>

@endsection
