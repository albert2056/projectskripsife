@extends('template')

@section('content')

<link rel="stylesheet" type="text/css" href="{{ asset('css/transaction.css') }}">

<main class="table" id="customers_table" style="margin-top: 150px; margin-left: 150px; margin-bottom: 50px">
    <section class="table__header">
        <h1 style="margin-top: 20px; margin-left: 20px">Transaction History</h1>
        <div class="input-group">
            <input type="search" placeholder="Search Data...">
            <img src="{{ asset('Assets/search.png') }}" style="" alt="">
        </div>
        <div class="export__file">
            <label for="export-file" class="export__file-btn" title="Export File"></label>
            <input type="checkbox" id="export-file">
            {{-- <div class="export__file-options">
                <label>Export As &nbsp; &#10140;</label>
                <label for="export-file" id="toPDF">PDF <img src="images/pdf.png" alt=""></label>
                <label for="export-file" id="toJSON">JSON <img src="images/json.png" alt=""></label>
                <label for="export-file" id="toCSV">CSV <img src="images/csv.png" alt=""></label>
                <label for="export-file" id="toEXCEL">EXCEL <img src="images/excel.png" alt=""></label>
            </div> --}}
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
                <tr>
                    <td> 1 </td>
                    <td>Zinzu Chan Lee</td>
                    <td>Seoul </td>
                    <td>17 Dec, 2022</td>
                    <td>
                        <p class="status paid">Paid</p>
                    </td>
                    <td> <strong> 
                        <button class="icon-button" style="margin-right: 25px">
                            <i class="fas fa-check" style=""></i>
                          </button>
                          
                          <button class="icon-button">
                            <i class="fas fa-trash"></i>
                          </button>    
                    </strong></td>
                </tr>
                <tr>
                    <td> 2 </td>
                    <td>Jeet Saru</td>
                    <td>Kathmandu</td>
                    <td>27 Aug, 2023</td>
                    <td>
                        <p class="status cancelled">Cancelled</p>
                    </td>
                    <td> <strong> 
                        <button class="icon-button" style="margin-right: 25px">
                            <i class="fas fa-check"></i>
                          </button>
                          
                          <button class="icon-button">
                            <i class="fas fa-trash"></i>
                          </button>    
                    </strong></td>
                </tr>

                <tr>
                    <td> 3</td>
                    <td>Sonal Gharti</td>
                    <td>Tokyo</td>
                    <td>14 Mar, 2023</td>
                    <td>
                        <p class="status shipped">Shipped</p>
                    </td>
                    <td> <strong> 
                        <button class="icon-button" style="margin-right: 25px">
                            <i class="fas fa-check"></i>
                          </button>
                          
                          <button class="icon-button">
                            <i class="fas fa-trash"></i>
                          </button>    
                    </strong></td>
                </tr>

                <tr>
                    <td> 4</td>
                    <td>Alson GC</td>
                    <td>New Delhi</td>
                    <td>25 May, 2023</td>
                    <td>
                        <p class="status paid">Paid</p>
                    </td>
                    <td> <strong> 
                        <button class="icon-button" style="margin-right: 25px">
                            <i class="fas fa-check"></i>
                          </button>
                          
                          <button class="icon-button">
                            <i class="fas fa-trash"></i>
                          </button>    
                    </strong></td>
                </tr>
                <tr>
                    <td> 5</td>
                    <td>Sarita Limbu </td>
                    <td>Paris</td>
                    <td>23 Apr, 2023</td>
                    <td>
                        <p class="status notPaid">Not Paid</p>
                    </td>
                    <td> <strong> 
                        <button class="icon-button" style="margin-right: 25px">
                            <i class="fas fa-check"></i>
                          </button>
                          
                          <button class="icon-button">
                            <i class="fas fa-trash"></i>
                          </button>    
                    </strong></td>
                </tr>
                <tr>
                    <td> 6</td>
                    <td>Alex Gonley </td>
                    <td>London</td>
                    <td>23 Apr, 2023</td>
                    <td>
                        <p class="status cancelled">Cancelled</p>
                    </td>
                    <td> <strong> 
                        <button class="icon-button" style="margin-right: 25px">
                            <i class="fas fa-check"></i>
                          </button>
                          
                          <button class="icon-button">
                            <i class="fas fa-trash"></i>
                          </button>    
                    </strong></td>
                </tr>
                <tr>
                    <td> 7</td>
                    <td>Jeet Saru</td>
                    <td>New York</td>
                    <td>20 May, 2023</td>
                    <td>
                        <p class="status paid">Paid</p>
                    </td>
                    <td> <strong> 
                        <button class="icon-button" style="margin-right: 25px">
                            <i class="fas fa-check"></i>
                          </button>
                          
                          <button class="icon-button">
                            <i class="fas fa-trash"></i>
                          </button>    
                    </strong></td>
                </tr>
                <tr>
                    <td> 8</td>
                    <td>Aayat Ali Khan </td>
                    <td>Islamabad</td>
                    <td>28 Feb, 2023</td>
                    <td>
                        <p class="status notPaid">Not Paid</p>
                    </td>
                    <td> <strong> 
                        <button class="icon-button" style="margin-right: 25px">
                            <i class="fas fa-check"></i>
                          </button>
                          
                          <button class="icon-button">
                            <i class="fas fa-trash"></i>
                          </button>    
                    </strong></td>
                </tr>
                <tr>
                    <td> 9</td>
                    <td>Alson GC </td>
                    <td>Dhaka</td>
                    <td>22 Dec, 2023</td>
                    <td>
                        <p class="status cancelled">Cancelled</p>
                    </td>
                    <td> <strong> 
                        <button class="icon-button" style="margin-right: 25px">
                            <i class="fas fa-check"></i>
                          </button>
                          
                          <button class="icon-button">
                            <i class="fas fa-trash"></i>
                          </button>    
                    </strong></td>
                </tr>
            </tbody>
        </table>
    </section>
</main>
<script src="{{ asset('js/transScript.js') }}"></script>

@endsection