@extends('template')

@section('content')


<div class="container">
    <div class="row justify-content-left">
        <div class="col-md-6 text-left mb-5" style="margin-top: 190px">
            <h1 class="text-custom2" style="margin-bottom: 30px">Tambahkan Paket Baru</h1>
        </div>
    </div>
    
    <div class="row" style="margin-bottom: 50px">
        <div class="col-md-6">
            <form action="{{route('book')}}" method="POST" onsubmit="return validatePackageForm()">  {{-- coba dicek routenya --}}
                @csrf
                <div class="form-group">
                    <label for="inputPackageName" style="margin-bottom: 10px; font-size: 18px">Nama Paket</label>
                    <input type="text" class="form-control" id="packageName" name="packageName" style="margin-bottom: 30px;" value="">
                </div>

                <div class="form-group">
                    <label for="inputPackagePrice" style="margin-bottom: 10px; font-size: 18px">Harga Paket</label>
                    <input type="text" class="form-control" id="packagePrice" name="packagePrice" style="margin-bottom: 30px;" onkeyup="formatPrice(this)" value="">
                </div>
                
                <div class="form-group">
                    <label for="inputPackageDescription" style="margin-bottom: 10px; font-size: 18px">Deskripsi Paket</label>
                    <textarea class="form-control" id="packageDescription" name="packageDescription" style="margin-bottom: 30px;"></textarea>
                </div>                         
                
                <button class="btn btn-primary btn-block btn-card mt-4" style="margin-bottom: 150px" type="submit">Submit</button>
            </form>
        </div>
        
        <div class="col-md-6">
            <img src="{{ asset('Assets/formImg.png') }}" alt="Image" class="img-fluid" style="width: 500px; height: 450px; margin-left: 160px;">
        </div>
    </div>
</div>

<script src="{{ asset('js/validate.js') }}"></script>
    
@endsection
