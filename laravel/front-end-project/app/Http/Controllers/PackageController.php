<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function showPackageChoosePage() {
        return view('packageChoose');
    }

    public function choosePackage(Request $request) {
        $transactionRequest = session()->get('transactionRequest');
        $transactionRequest->packageId = $request['packageId'];
        session()->put('transactionRequest', $transactionRequest);
        logger()->info('transactionRequest:', ['transactionRequest' => $transactionRequest]);
        return redirect('/outfitchoose');
    }

}
