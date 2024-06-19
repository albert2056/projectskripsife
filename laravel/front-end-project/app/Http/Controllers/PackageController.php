<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PackageController extends Controller
{
    public function showPackageChoosePage() {
        $transactionRequest = session()->get('transactionRequest');
        if ($transactionRequest == null) { 
            return redirect('/bookpage');
        }
        
        $url = "http://localhost:8080/api/package/findAll";

        $response = Http::get($url);
        $responseData = $response->json();

        return view('packageChoose', ['packages' => $responseData]);
    }

    public function showPackagePreviewPage() {
        $url = "http://localhost:8080/api/package/findAll";
        $response = Http::get($url);
        $responseData = $response->json();
        return view('packagePreview', ['packages'=>$responseData]);
    }

    public function choosePackage(Request $request) {
        $transactionRequest = session()->get('transactionRequest');

        if ($transactionRequest == null) {
            return redirect('bookpage');
        }
        $packageId = (int) $request['packageId'];

        $url = "http://localhost:8080/api/package/findById?id=$packageId";

        $response = Http::get($url);
        $package = $response->json();

        $transactionRequest = session()->get('transactionRequest');
        $transactionRequest->packageId = $packageId;
        
        session()->put('transactionRequest', $transactionRequest);
        session()->put('package', $package);

        if(strpos($package['name'], 'Standard') !== false) {
            return redirect('/invoice');
        }
        return redirect('/outfitchoose');
    }

    public function showPackageAdminPage() {
        $url = "http://localhost:8080/api/package/findAll";

        $response = Http::get($url);
        $responseData = $response->json();

        return view ('packageAdmin', ['packages' => $responseData]);
    }

    public function showCreatePackagePage() {
        return view('packageCreateForm');
    }

    public function createPackage(Request $request) {
        $name = $request['name'];
        $price = (int) $request['price'];
        $description = $request['description'];
        $url = "http://localhost:8080/api/package/create?name=$name&price=$price&description=$description";
        $response = Http::post($url);
        $responseData = $response->json();
        return redirect('/packageadmin');
    }

    public function showUpdatePackagePage(Request $request) {
        $packageId = $request->input('id');
        $url = "http://localhost:8080/api/package/findById?id=$packageId";
        $response = Http::get($url);
        $responseData = $response->json();

        $package = $response->json();
        if ($response->successful()) {
            return view('packageUpdateForm', ['package' => $package]);    
        } else {
            $errorMessage = isset($responseData['description']) ? $responseData['description'] : 'An error occurred while retrieving the package.';
            return redirect()->back()->with('error', $errorMessage);
        }
    }

    public function updatePackage(Request $request, $packageId) {
        $name = $request['name'];
        $price = (int) $request['price'];
        $description = $request['description'];
        $url = "http://localhost:8080/api/package/update?id=$packageId&name=$name&price=$price&description=$description";
        $response = Http::post($url);
        $responseData = $response->json();

        $package = $response->json();
        if ($response->successful()) {
            return redirect('/packageadmin');    
        } else {
            $errorMessage = isset($responseData['description']) ? $responseData['description'] : 'An error occurred while retrieving the package.';
            return redirect()->back()->with('error', $errorMessage);
        }
    }

    public function deletePackage(Request $request) {
        $packageId = $request->input('id');
        
        $response = Http::delete("http://localhost:8080/api/package/delete?id={$packageId}");
        $responseData = $response->json();

        if ($response->successful()) {
            return redirect()->back()->with('success', 'Package deleted successfully.');
        } else {
            $errorMessage = isset($responseData['description']) ? $responseData['description'] : 'An error occurred while deleting the package.';
            return redirect()->back()->with('error', $errorMessage);
        }
    }

}
