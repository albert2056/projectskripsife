@extends('template')

@section('content')

<style>
    .card {
        width: 400px;
        height: 550px;
        background-color: rgba(255, 218, 217, 0.7);
        position: relative;
        border: none;
        border-radius: 0px;
        margin-bottom: 20px
    }

    .card-overlay {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 340px;
        height: 480px;
        background-color: #F2F2F2;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        border-radius: 10px
    }

    .overlay-content {
        color: #333333;
        margin-top: 17px;
        letter-spacing: 1px;
        font-size: 22px;
        font-weight: 500;
    }

</style>

<div class="col text-center mb-5" style="margin-top: 150px; margin-left: 20px">
    <h1 class="text-custom1" style="letter-spacing: 2px">Busana</h1>
</div>

<div class="container" style="margin-bottom: 50px">
    <div class="row row-cols-1 row-cols-md-3 g-5">
        <div class="col">
            <div class="card">
                <div class="card-overlay">
                    <img src="{{ asset('Assets/busanaImg.png') }}" style="width: 300px; height: 360px; border-radius: 10px; margin-top: 20px" alt="Overlay Image">
                    <div class="overlay-content">
                        <p> Red Gown </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card">
                <div class="card-overlay">
                    <img src="{{ asset('Assets/busanaImg.png') }}" style="width: 300px; height: 360px; border-radius: 10px; margin-top: 20px" alt="Overlay Image">
                    <div class="overlay-content">
                        <p> Red Gown </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card">
                <div class="card-overlay">
                    <img src="{{ asset('Assets/busanaImg.png') }}" style="width: 300px; height: 360px; border-radius: 10px; margin-top: 20px" alt="Overlay Image">
                    <div class="overlay-content">
                        <p> Red Gown </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card">
                <div class="card-overlay">
                    <img src="{{ asset('Assets/busanaImg.png') }}" style="width: 300px; height: 360px; border-radius: 10px; margin-top: 20px" alt="Overlay Image">
                    <div class="overlay-content">
                        <p> Red Gown </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card">
                <div class="card-overlay">
                    <img src="{{ asset('Assets/busanaImg.png') }}" style="width: 300px; height: 360px; border-radius: 10px; margin-top: 20px" alt="Overlay Image">
                    <div class="overlay-content">
                        <p> Red Gown </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    
</div>



@endsection
