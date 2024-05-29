@extends('template')

@section('content')

<style>
    .btn-plus {
        justify-content: right;
        display: flex; 
        font-size: 32px;
        color: #FF6969;
        margin-bottom: 20px;
    }

    .btn-card-custom {
        background-color: #FF6969;
        border: none;
        outline: none;
        width: 180px;
        height: 62px;
        font-size: 18px;
        font-weight: 500;
        border-radius: 12px;
        margin-top: 25px;
    }   

    .btn-card-custom:hover {
        background-color: #FF8787;
    }

    .btn-card-custom:active {
        background-color: #FF8787;
    }

    .card-content {
        height: 350px;
        overflow: hidden;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        position: relative;
    }

    .card-content .text-package {
        overflow-y: auto;
        margin-bottom: 5px;
        position: absolute;
        top: 50px;
        left: 50%;
        transform: translateX(-50%);
        text-align: left;
        width: fit-content;
        font-size: 20px;
    }

    .card-footer {
        position: relative;
        bottom: 0;
        width: 100%;
    }
</style>


<div class="container" style="margin-bottom: 180px">
    <div class="row">
        <div class="col text-center mb-5" style="margin-top: 150px; margin-left: 20px">
            <h1 class="text-custom1">Paket Usher</h1>
        </div>
    </div>

    <div class="row mb-5" style="margin-left: 60px">
        <div class="btn-plus" style="text-decoration: none;">
            <a href="/packagecreateform" style="color: #FF6969;">
                <i class="fa-solid fa-plus" style="margin-bottom: 10px;"></i>
            </a>
        </div>
        @foreach ($packages as $datas)
        <div class="col-md-6 mb-5">
            <div class="card shadow rounded-5" style="border-width: 0px; width: 535px; height: 650px">   
                <div class="d-flex justify-content-center">
                    <img src="{{ asset('Assets/paketCoupleImg.png') }}" style="width: 200px; height: 165px" class="card-img-top mt-5" alt="...">
                </div>
                <div class="card-body text-center card-content">
                    <h5 class="card-title text-center btn-text-card">{{ $datas['name'] }}</h5>
                    <div class="text-package mt-4">
                        <ul style="text-align: left; font-size: 20px;">
                            @foreach ($datas['description'] as $desc)
                                <li>{{ $desc }}</li>
                            @endforeach
                        </ul>
                    </div>
                    <h5 class="card-title text-center btn-text-card" style="position: absolute; bottom: 115px; left: 50%; transform: translateX(-50%);">RP. {{ $datas['price'] }}</h5>
                    {{-- <div class="row" style="margin-bottom: 10px"> --}}
                        <div class="col" style="position: absolute; bottom: 35px; left: 30%; transform: translateX(-50%);">
                            <form method="GET" action="{{ route('packageUpdateForm', ['id' => $datas['id']]) }}">
                                @csrf
                                <input type="hidden" name="id" value="{{ $datas['id'] }}">
                                <button type="submit" class="btn btn-secondary btn-card-custom">Update</button>
                            </form>
                        </div>
                        <div class="col" style="position: absolute; bottom: 35px; left: 70%; transform: translateX(-50%);">
                            <form method="POST" action="{{ route('deletePackage') }}">
                                @csrf
                                @method('DELETE')
                                <input type="hidden" name="id" value="{{ $datas['id'] }}">
                                <button type="submit" class="btn btn-primary btn-card-custom" onclick="packageDeletePopup()">Delete</button>
                            </form>
                        </div>
                    {{-- </div> --}}
                </div>
            </div>
        </div>        
        @endforeach
    </div>
</div>

<script src="{{ asset('js/alert.js') }}"></script>

@endsection
