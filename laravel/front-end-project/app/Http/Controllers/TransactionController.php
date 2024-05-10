<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\BookRequest;
use App\Models\TransactionRequest;
use Carbon\Carbon;

class TransactionController extends Controller
{
    public function showAdminTransactionPage() {
        return view('transactionAdmin');
    }

    public function showBookPage() {
        return view('bookForm');
    }

    public function showUserTransactionPage() {
        return view('transaction');
    }

    public function showInvoicePage() {
        $transactionRequest = session()->get('transactionRequest');
        $outfitName = session()->get('outfitName');
        $package = session()->get('package');
        logger()->info('packageI:', ['package' => $package]);
        $response = Http::post('http://localhost:8080/api/transaction/invoice', $transactionRequest->toArray());
        $responseData = $response->json();
        logger()->info('responseData:', ['responseData' => $responseData]);
        $eventDate = Carbon::parse($responseData['eventDate'])->toDateString();
        $responseData['eventDate'] = $eventDate;
        $user = session()->get('user');
        session()->forget('transactionRequest');
        session()->forget('outfitName');
        session()->forget('package');
        return view('invoice', ['transaction'=>$responseData, 'user'=>$user, 'outfitName'=>$outfitName, 'package'=>$package]);
        // return view('invoice');
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
        if ($responseData['statusCode']!=null) {
            return redirect()->back()->withInput()->with('error', $responseData['description']);
        }
        $user = session()->get('user'); 
        $transactionRequest = new TransactionRequest();
        $transactionRequest->fill($responseData);
        $transactionRequest->userId = $user['id'];
        $transactionRequest->updatedBy = $user['id'];
        session()->put('transactionRequest', $transactionRequest);
        return redirect('/packagechoose');
    }

    public function getInvoice() {

    }
}
