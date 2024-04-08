@extends('template')

@section('content')

<style>
    .card {
        width: 400px;
        height: 620px;
        background-color: rgba(255, 218, 217, 0.7);
        position: relative;
        border: none;
        border-radius: 0px;
        margin-bottom: 5px;
    }

    .card-overlay {
        position: absolute;
        top: 44%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 340px;
        height: 480px;
        background-color: #F2F2F2;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        border-radius: 10px;
    }

    .overlay-content {
        color: black;
        margin: 10px;
        margin-right: 215px;
        letter-spacing: 1px;

    }

    .card-body {
        padding-top: 507px;
    }

    .btn-card-custom {
        background-color: #FF6969;
        border: none;
        outline: none;
        width: 150px;
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

    .btn-plus {
        justify-content: right;
        display: flex; 
        font-size: 32px;
        color: #FF6969;
        margin-bottom: 20px;
    }

</style>

<div class="col text-center mb-5" style="margin-top: 150px; margin-left: 20px">
    <h1 class="text-custom1" style="letter-spacing: 2px">Pasangan Berbahagia Yang Mempercayai <br> Hari Bahagianya Bersama Kami</h1>
</div>


<div class="container" style="margin-bottom: 150px">
    <div class="btn-plus" style="text-decoration: none;">
        <a href="/portfoliocreateform" style="color: #FF6969;">
            <i class="fa-solid fa-plus" style="margin-bottom: 10px;"></i>
        </a>
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-5">
        <div class="col">
            <div class="card">
                <div class="card-overlay">
                    <img src="{{ asset('Assets/imgPortfolio.jpg') }}" style="width: 300px; height: 360px; border-radius: 10px; margin-top: 20px" alt="Overlay Image">
                    <div class="overlay-content">
                        <p> Udin <br> 17.03.2024 <br> Pullman </p>
                    </div>
                </div>
                <div class="card-body text-center">
                    <button class="btn btn-primary btn-card-custom" style="margin-right: 15px">Delete</button>
                    <a href="/portfoliocreateform">
                        <button class="btn btn-secondary btn-card-custom">Edit</button>
                    </a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card">
                <div class="card-overlay">
                    <img src="{{ asset('Assets/imgPortfolio.jpg') }}" style="width: 300px; height: 360px; border-radius: 10px; margin-top: 20px" alt="Overlay Image">
                    <div class="overlay-content">
                        <p> Udin <br> 17.03.2024 <br> Pullman </p>
                    </div>
                </div>
                <div class="card-body text-center">
                    <button class="btn btn-primary btn-card-custom" style="margin-right: 15px">Delete</button>
                    <a href="/portfoliocreateform">
                        <button class="btn btn-secondary btn-card-custom">Edit</button>
                    </a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card">
                <div class="card-overlay">
                    <img src="{{ asset('Assets/imgPortfolio.jpg') }}" style="width: 300px; height: 360px; border-radius: 10px; margin-top: 20px" alt="Overlay Image">
                    <div class="overlay-content">
                        <p> Udin <br> 17.03.2024 <br> Pullman </p>
                    </div>
                </div>
                <div class="card-body text-center">
                    <button class="btn btn-primary btn-card-custom" style="margin-right: 15px">Delete</button>
                    <a href="/portfoliocreateform">
                        <button class="btn btn-secondary btn-card-custom">Edit</button>
                    </a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card">
                <div class="card-overlay">
                    <img src="{{ asset('Assets/imgPortfolio.jpg') }}" style="width: 300px; height: 360px; border-radius: 10px; margin-top: 20px" alt="Overlay Image">
                    <div class="overlay-content">
                        <p> Udin <br> 17.03.2024 <br> Pullman </p>
                    </div>
                </div>
                <div class="card-body text-center">
                    <button class="btn btn-primary btn-card-custom" style="margin-right: 15px">Delete</button>
                    <a href="/portfoliocreateform">
                        <button class="btn btn-secondary btn-card-custom">Edit</button>
                    </a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card">
                <div class="card-overlay">
                    <img src="{{ asset('Assets/imgPortfolio.jpg') }}" style="width: 300px; height: 360px; border-radius: 10px; margin-top: 20px" alt="Overlay Image">
                    <div class="overlay-content">
                        <p> Udin <br> 17.03.2024 <br> Pullman </p>
                    </div>
                </div>
                <div class="card-body text-center">
                    <button class="btn btn-primary btn-card-custom" style="margin-right: 15px">Delete</button>
                    <a href="/portfoliocreateform">
                        <button class="btn btn-secondary btn-card-custom">Edit</button>
                    </a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card">
                <div class="card-overlay">
                    <img src="{{ asset('Assets/imgPortfolio.jpg') }}" style="width: 300px; height: 360px; border-radius: 10px; margin-top: 20px" alt="Overlay Image">
                    <div class="overlay-content">
                        <p> Udin <br> 17.03.2024 <br> Pullman </p>
                    </div>
                </div>
                <div class="card-body text-center">
                    <button class="btn btn-primary btn-card-custom" style="margin-right: 15px">Delete</button>
                    <a href="/portfoliocreateform">
                        <button class="btn btn-secondary btn-card-custom">Edit</button>
                    </a>
                </div>
            </div>
        </div>

        

    </div>
    
</div>


@endsection
