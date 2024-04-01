<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\BookRequest;
use App\Models\TransactionRequest;

class TransactionController extends Controller
{
    public function showAdminTransactionPage() {
        return view('transactionAdmin');
    }

    public function showBookPage() {
        return view('bookForm');
    }

    public function book(Request $request) {
        $bookRequest = new BookRequest();
        $bookRequest->name = $request['name'];
        $bookRequest->totalUsher = $request['totalUsher'];
        $bookRequest->eventDate = $request['eventDate'];
        $bookRequest->venue = $request['venue'];
        $bookRequest->wo = $request['wo'];
        $response = Http::post('http://localhost:8080/api/transaction/book', $bookRequest->toArray());
        $responseData = $response->json();
        logger()->info('book resp:', ['book' => $responseData]);
        $user = session()->get('user'); 
        $transactionRequest = new TransactionRequest();
        $transactionRequest->fill($responseData);
        $transactionRequest->updatedBy = $user['email'];
        session()->put('transactionRequest', $transactionRequest);
        return redirect('/packagechoose');
    }
}
