@extends('template')

@section('content')


<div class="container">
    <div class="row justify-content-left">
        <div class="col-md-6 text-left mb-5" style="margin-top: 190px">
            <h1 class="text-custom2" style="margin-bottom: 30px">Tambahkan Portfolio Baru</h1>
        </div>
    </div>
    
    <div class="row" style="margin-bottom: 50px">
        <div class="col-md-6">
            <form action="{{route('createPortfolio')}}" method="POST" onsubmit="return validatePortfolioForm()" enctype="multipart/form-data">  {{-- coba dicek routenya --}}
                @csrf
                <div class="form-group">
                    <label for="inputCoupleName" style="margin-bottom: 10px; font-size: 18px">Nama Pasangan</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Ex: John & Jane" style="margin-bottom: 30px;" value="">
                </div>

                <div class="form-group">
                    <label for="inputEventDate" style="margin-bottom: 10px; font-size: 18px" >Tanggal Pernikahan</label>
                    <input type="date" class="form-control" id="eventDate" name="eventDate" style="margin-bottom: 30px;">
                </div>

                <div class="form-group">
                    <label for="inputImage" style="margin-bottom: 10px; font-size: 18px">Tambahkan Gambar (Multiple)</label>
                    <input type="file" class="form-control" id="image" name="image" multiple style="margin-bottom: 30px;">
                </div>
                 
                <div class="form-group">
                    <label for="inputOutfitNamePort" style="margin-bottom: 10px; font-size: 18px">Nama Busana</label>
                    <select class="form-control" id="gownName-control" name="gownName" style="margin-bottom: 30px;">
                        <option value="">Pilih Outfit</option>
                        @foreach ($outfits as $datas)
                            <option value="{{ $datas['name'] }}">{{ $datas['name'] }}</option>
                        @endforeach
                    </select>
                </div>    

                <div class="form-group">
                    <label for="inputVenue" style="margin-bottom: 10px; font-size: 18px">Lokasi Venue Pernikahan</label>
                    <input type="text" class="form-control" id="venue" name="venue" style="margin-bottom: 30px;">
                </div>

                <div class="form-group" >
                    <label for="inputWO" style="margin-bottom: 10px; font-size: 18px">Nama Wedding Organizer</label>
                    <input type="text" class="form-control" id="wo" name="wo" style="margin-bottom: 30px;" placeholder="Opsional">
                </div>
                <button class="btn btn-primary btn-block btn-card mt-4" style="margin-bottom: 150px" type="submit" onclick="return validateAndSubmitFormPortfolioCreate()">Submit</button>
            </form>
        </div>
        
        <div class="col-md-6">
            <img src="{{ asset('Assets/formImg.png') }}" alt="Image" class="img-fluid" style="width: 500px; height: 450px; margin-left: 160px; margin-top: 100px">
        </div>
    </div>
</div>

<script src="{{ asset('js/validate.js') }}"></script>
<script src="{{ asset('js/alert.js') }}"></script>

@endsection
