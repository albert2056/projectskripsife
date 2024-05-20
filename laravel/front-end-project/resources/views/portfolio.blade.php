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
        margin-bottom: 18px;
    }

    .card-overlay {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 340px;
        height: 495px;
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
        letter-spacing: 1px;
        text-align: left;
        white-space: nowrap;         
        overflow: hidden;            
        text-overflow: ellipsis;     
        width: 100%;                 
        padding-left: 10px; 
    }

</style>

<div class="col text-center mb-5" style="margin-top: 150px; margin-left: 20px">
    <h1 class="text-custom1" style="letter-spacing: 2px">Pasangan Berbahagia Yang Mempercayai <br> Hari Bahagianya Bersama Kami</h1>
</div>

<div class="container" style="margin-bottom: 150px">
    <div class="row row-cols-1 row-cols-md-3 g-5">
        @foreach ($portfolios as $datas)
            <div class="col">
                <div class="card">
                    <div class="card-overlay">
                        <a href="/portfoliodetail/{{ $datas['id'] }}">
                            <img src="{{ asset('Assets/portfolio/' . $datas['image']) }}" style="width: 300px; height: 360px; border-radius: 10px; margin-top: 20px" alt="Overlay Image">
                        </a>

                        <div class="overlay-content">
                            <p> {{ $datas['name'] }} <br> {{ \Carbon\Carbon::parse($datas['eventDate'])->format('d/m/Y') }}<br> {{ $datas['venue'] }} </p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>


@endsection
