@extends('template')

@section('content')


<div class="container">
    <div class="row justify-content-left">
        <div class="col-md-6 text-left mb-5" style="margin-top: 140px;">
            <h1 class="text-custom2">Lengkapi Data Pernikahan Anda</h1>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-6">
            <form action="{{route('book')}}" method="POST" onsubmit="return validateBookForm()">
                @csrf
                <div class="form-group">
                    <label for="inputName" style="margin-bottom: 10px; font-size: 18px">Nama Pasangan</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Ex: John & Jane" style="margin-bottom: 30px;" value="">
                </div>

                <div class="form-group">
                    <label for="inputUsher" style="margin-bottom: 10px; font-size: 18px">Jumlah Usher</label>
                    <input type="number" class="form-control" id="totalUsher" name="totalUsher" style="margin-bottom: 30px;" min="0" max="8">
                </div>

                <div class="form-group">
                    <label for="inputDate" style="margin-bottom: 10px; font-size: 18px" >Tanggal Pernikahan</label>
                    <input type="date" class="form-control" id="eventDate" name="eventDate" style="margin-bottom: 30px;">
                </div>
                
                <div class="form-group">
                    <label for="inputPhoneNumber" style="margin-bottom: 10px; font-size: 18px">Nomor Telepon</label>
                    <input type="tel" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="" style="margin-bottom: 30px;">
                </div>                
                
                <div class="form-group">
                    <label for="inputVenue" style="margin-bottom: 10px; font-size: 18px">Lokasi Venue Pernikahan</label>
                    <input type="text" class="form-control" id="venue" name="venue" style="margin-bottom: 30px;">
                </div>

                <div class="form-group" >
                    <label for="inputWO" style="margin-bottom: 10px; font-size: 18px">Nama Wedding Organizer</label>
                    <input type="text" class="form-control" id="wo" name="wo" style="margin-bottom: 30px;" placeholder="Opsional">
                </div>
                
                <button class="btn btn-primary btn-block btn-card mt-4" style="margin-bottom: 150px" type="submit">Submit</button>
            </form>
        </div>
        
        <div class="col-md-6">
            <img src="{{ asset('Assets/formImg.png') }}" alt="Image" class="img-fluid" style="width: 500px; height: 450px; margin-left: 160px; margin-top: 115px">
        </div>
    </div>
</div>

<script src="{{ asset('js/validate.js') }}"></script>

@endsection
