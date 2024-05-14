@extends('template')

@section('content')

<style>
    body {
        background-image: url('Assets/portfolioBg.jpg');
        background-size: cover;
        background-position: center;
    }
</style>

<link rel="stylesheet" type="text/css" href="{{ asset('css/transaction.css') }}">

<main class="table" id="customers_table" style="margin-top: 150px; margin-left: 150px; margin-bottom: 50px">
    <section class="table__header">
        <h1 style="margin-top: 20px; margin-left: 20px">Transaction History</h1>
        <div class="input-group">
            <input type="search" placeholder="Search Data...">
        </div>
    </section>
    <section class="table__body">
        <table>
            <thead>
                <tr>
                    <th> ID <span class="icon-arrow">&UpArrow;</span></th>
                    <th> Venue <span class="icon-arrow">&UpArrow;</span></th>
                    <th> Event Date <span class="icon-arrow">&UpArrow;</span></th>
                    <th> Status <span class="icon-arrow">&UpArrow;</span></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($transactions as $datas)
                    <tr>
                        <td> {{ $datas['id'] }} </td>
                        <td>{{ $datas['venue'] }}</td>
                        <td>
                            {{ \Carbon\Carbon::parse($datas['eventDate'])->format('d/m/Y') }}
                        </td>
                        @if ($datas['paymentStatus'] == "NOT PAID")
                            <td>
                                <p class="status notPaid">Not Paid</p>
                            </td>
                        @else
                            <td>
                                <p class="status paid">Paid</p>
                            </td>
                        @endif

                    </tr>
                @endforeach
                {{-- <tr>
                    <td> 2 </td>
                    <td>Kathmandu</td>
                    <td>27 Aug, 2023</td>
                    <td>
                        <p class="status cancelled">Cancelled</p>
                    </td>
                </tr>

                <tr>
                    <td> 3</td>
                    <td>Tokyo</td>
                    <td>14 Mar, 2023</td>
                    <td>
                        <p class="status paid">Paid</p>
                    </td>
                </tr>

                <tr>
                    <td> 4</td>
                    <td>New Delhi</td>
                    <td>25 May, 2023</td>
                    <td>
                        <p class="status paid">Paid</p>
                    </td>
                </tr>
                <tr>
                    <td> 5</td>
                    <td>Paris</td>
                    <td>23 Apr, 2023</td>
                    <td>
                        <p class="status notPaid">Not Paid</p>
                    </td>
                </tr>
                <tr>
                    <td> 6</td>
                    <td>London</td>
                    <td>23 Apr, 2023</td>
                    <td>
                        <p class="status cancelled">Cancelled</p>
                    </td>
                </tr>
                <tr>
                    <td> 7</td>
                    <td>New York</td>
                    <td>20 May, 2023</td>
                    <td>
                        <p class="status paid">Paid</p>
                    </td>
                </tr> --}}
            </tbody>
        </table>
    </section>
</main>
<script src="{{ asset('js/transScript.js') }}"></script>

@endsection