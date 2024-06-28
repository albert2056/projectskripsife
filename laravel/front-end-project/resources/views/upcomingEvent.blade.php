@extends('template')

@section('content')

<style>
    body {
        background-image: url('../external/portfolioBg.jpeg');
        background-size: cover;
        background-position: center;
    }
    tr {
        cursor: pointer;
    }
    tr:hover {
        background-color: #f1f1f1;
    }
</style>
<link rel="stylesheet" type="text/css" href="{{ asset('css/transaction.css') }}">

<main class="table" id="customers_table" style="margin-top: 150px; margin-left: 150px; margin-bottom: 50px">
    <section class="table__header">
        <h1 style="margin-top: 20px; margin-left: 20px">Upcoming Events</h1>
        <div class="input-group">
            <input type="search" placeholder="Search Data...">
        </div>
    </section>
    <section class="table__body">
        <table>
            <thead>
                <tr>
                    <th> ID <span class="icon-arrow">&UpArrow;</span></th>
                    <th> Name <span class="icon-arrow">&UpArrow;</span></th>
                    <th> Venue <span class="icon-arrow">&UpArrow;</span></th>
                    <th> Event Date <span class="icon-arrow">&UpArrow;</span></th>
                    <th> Status <span class="icon-arrow">&UpArrow;</span></th>
                    <th> Action <span class="icon-arrow">&UpArrow;</span></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($transactions as $datas)
                    <tr onclick="window.location.href='/transaction/detail/admin/{{ $datas['id'] }}'">
                        <td> {{ $datas['id'] }} </td>
                        <td>{{ $datas['name'] }}</td>
                        <td>{{ $datas['venue'] }} </td>
                        <td>{{ $datas['eventDate'] }} </td>
                        @if ($datas['paymentStatus'] == "NOT PAID")
                            <td>
                                <p class="status notPaid">Not Paid</p>
                            </td>
                        @else
                            <td>
                                <p class="status paid">Paid</p>
                            </td>
                        @endif
                        <td> 
                            <div style="display: inline-block;">
                                <form method="POST" action="{{ route('changeStatus') }}">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $datas['id'] }}">
                                    <button class="icon-button" style="margin-right: 25px" type="submit" onclick="changeStatusPopup()" @if ($datas['paymentStatus'] == "PAID") disabled @endif>
                                        <img src="{{ asset('Assets/check.png') }}" alt="" srcset="">
                                    </button>
                                </form>
                            </div>
                            <div style="display: inline-block;">
                                <form method="POST" action="{{ route('deleteTransaction') }}">
                                    @csrf
                                    @method('DELETE')
                                    <input type="hidden" name="id" value="{{ $datas['id'] }}">
                                    <button class="icon-button" type="submit" onclick="transactionDeletePopup()">
                                        <img src="{{ asset('Assets/trash.png') }}" alt="" srcset="">
                                    </button>    
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
</main>
<script src="{{ asset('js/transScript.js') }}"></script>
<script src="{{ asset('js/alert.js') }}"></script>

@endsection