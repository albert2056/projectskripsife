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
        $url = "http://localhost:8080/api/transaction/findAll";

        $response = Http::get($url);
        $responseData = $response->json();
        foreach ($responseData as &$transaction) {
            if (isset($transaction['eventDate'])) {
                $transaction['eventDate'] = Carbon::parse($transaction['eventDate'])->format('d-m-Y');
            }
        }
        return view('transactionAdmin', ['transactions'=>$responseData]);
    }

    public function showWeeklyUpcomingEventPage() {
        $threshold = 7;
        $url = "http://localhost:8080/api/transaction/findUpcomingEvents?threshold=$threshold";

        $response = Http::get($url);
        $responseData = $response->json();

        foreach ($responseData as &$transaction) {
            if (isset($transaction['eventDate'])) {
                $transaction['eventDate'] = Carbon::parse($transaction['eventDate'])->format('d-m-Y');
            }
        }
        return view('upcomingEvent', ['transactions'=>$responseData]);
    }

    public function showMonthlylyUpcomingEventPage() {
        $threshold = 30;
        $url = "http://localhost:8080/api/transaction/findUpcomingEvents?threshold=$threshold";

        $response = Http::get($url);
        $responseData = $response->json();
        foreach ($responseData as &$transaction) {
            if (isset($transaction['eventDate'])) {
                $transaction['eventDate'] = Carbon::parse($transaction['eventDate'])->format('d-m-Y');
            }
        }
        return view('upcomingEvent', ['transactions'=>$responseData]);
    }

    public function showBookPage() {
        return view('bookForm');
    }

    public function showUserTransactionPage() {
        $user = session()->get('user'); 
        $userId = $user['id'];
        $url = "http://localhost:8080/api/transaction/findByUserId?userId=$userId";

        $response = Http::get($url);
        $responseData = $response->json();
        foreach ($responseData as &$transaction) {
            if (isset($transaction['eventDate'])) {
                $transaction['eventDate'] = Carbon::parse($transaction['eventDate'])->format('d-m-Y');
            }
        }

        return view('transaction', ['transactions'=>$responseData]);
    }

    public function showInvoicePage() {
        $transactionRequest = session()->get('transactionRequest');
        $outfitName = session()->get('outfitName');
        $package = session()->get('package');
        if ($transactionRequest == null) { 
            return redirect('/bookpage');
        }
        $response = Http::post('http://localhost:8080/api/transaction/invoice', $transactionRequest->toArray());
        $responseData = $response->json();
        $eventDate = Carbon::parse($responseData['eventDate'])->format('d-m-Y');
        $responseData['eventDate'] = $eventDate;
        $user = session()->get('user');
        session()->forget('transactionRequest');
        session()->forget('outfitName');
        session()->forget('package');
        return view('invoice', ['transaction'=>$responseData, 'user'=>$user, 'outfitName'=>$outfitName, 'package'=>$package]);
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
        
        $user = session()->get('user'); 
        $transactionRequest = new TransactionRequest();
        $transactionRequest->fill($responseData);
        $transactionRequest->userId = $user['id'];
        $transactionRequest->updatedBy = $user['id'];
        session()->put('transactionRequest', $transactionRequest);
        return redirect('/packagechoose');
    }

    public function deleteTransaction(Request $request) {
        $transactionId = $request->input('id');
        Http::delete("http://localhost:8080/api/transaction/delete?id={$transactionId}");

        return redirect()->back()->with('success', 'Transaction deleted successfully.');
        
    }

    public function changeStatus(Request $request) {
        $transactionId = $request->input('id');
        Http::post("http://localhost:8080/api/transaction/changeStatus?id={$transactionId}");
        
        return redirect()->back()->with('success', 'Payment status changed successfully.');
        
    }

    public function showUserTransactionDetailPage($id) {
        $user = session()->get('user');
        $url = "http://localhost:8080/api/transaction/findById?id=$id";

        $response = Http::get($url);
        $responseData = $response->json();

        if($responseData['userId']!=$user['id']) {
            return redirect('/transaction');
        }

        $eventDate = Carbon::parse($responseData['eventDate'])->format('d-m-Y');
        $responseData['eventDate'] = $eventDate;
        
        $packageId = $responseData['packageId'];
        $outfitId = $responseData['outfitId'];

        $url2 = "http://localhost:8080/api/package/findById?id=$packageId";

        $package = Http::get($url2);
        
        $packageData = $package->json();

        if(strpos($packageData['name'], 'Standard') !== false) {
            $outfitName = null;
        } 
        else {
            $url3 = "http://localhost:8080/api/outfit/findById?id=$outfitId";

            $outfit = Http::get($url3);
            $outfitData = $outfit->json();
            $outfitName = $outfitData['name'];
        }
        
        return view('transactionDetail', ['transaction'=>$responseData, 'user'=>$user, 'outfitName'=>$outfitName, 'package'=>$package]);
    }

    public function showAdminTransactionDetailPage($id) {
        $url = "http://localhost:8080/api/transaction/findById?id=$id";

        $response = Http::get($url);
        $responseData = $response->json();

        $eventDate = Carbon::parse($responseData['eventDate'])->format('d-m-Y');
        $responseData['eventDate'] = $eventDate;
        
        $user = session()->get('user');
        $packageId = $responseData['packageId'];
        $outfitId = $responseData['outfitId'];

        $url2 = "http://localhost:8080/api/package/findById?id=$packageId";

        $package = Http::get($url2);
        $packageData = $package->json();

        if(strpos($packageData['name'], 'Standard') !== false) {
            $outfitName = null;
        } 
        else {
            $url3 = "http://localhost:8080/api/outfit/findById?id=$outfitId";

            $outfit = Http::get($url3);
            $outfitData = $outfit->json();
            $outfitName = $outfitData['name'];
        }
        
        return view('transactionDetail', ['transaction'=>$responseData, 'user'=>$user, 'outfitName'=>$outfitName, 'package'=>$package]);
    }
}
