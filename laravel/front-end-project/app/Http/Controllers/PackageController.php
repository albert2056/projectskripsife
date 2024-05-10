<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PackageController extends Controller
{
    public function showPackageChoosePage() {
        return view('packageChoose');
    }

    public function choosePackage(Request $request) {
        $transactionRequest = session()->get('transactionRequest');
        $transactionRequest->packageId = (int) $request['packageId'];
        session()->put('transactionRequest', $transactionRequest);
        logger()->info('transactionRequest:', ['transactionRequest' => $transactionRequest]);
        return redirect('/outfitchoose');
    }

    public function showPackageAdminPage() {
        $url = "http://localhost:8080/api/package/findAll";

        $response = Http::get($url);
        $responseData = $response->json();
        logger()->info('pack:', ['packages' => $responseData]);

        return view ('packageAdmin', ['packages' => $responseData]);
    }

    public function createPackagePage() {
        return view('packageCreateForm');
    }

    public function createPackage(Request $request) {
        $name = $request['name'];
        $price = (int) $request['price'];
        $description = $request['description'];
        logger()->info('name:', ['name' => $name]);
        logger()->info('price:', ['price' => $price]);
        logger()->info('description:', ['description' => $description]);
        $url = "http://localhost:8080/api/package/create?name=$name&price=$price&description=$description";
        $response = Http::post($url);
        $responseData = $response->json();
        logger()->info('Package Create:', ['Package Create' => $responseData]);
        return redirect('/');
    }


}
