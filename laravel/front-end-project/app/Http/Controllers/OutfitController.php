<?php

namespace App\Http\Controllers;

use App\Models\OutfitRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class OutfitController extends Controller
{
    public function showOutfitChoosePage() {
        $transactionRequest = session()->get('transactionRequest');
        if ($transactionRequest == null) { 
            return redirect('/bookpage');
        }
        return view('outfitChoose');
    }

    public function showOutfitByOutfitCategoryIdPage() {
        $transactionRequest = session()->get('transactionRequest');
        if ($transactionRequest == null) { 
            return redirect('/bookpage');
        }
        
        $outfitCategoryId = session()->get('outfitCategoryId');
        $url = "http://localhost:8080/api/outfit/findByOutfitCategoryId?outfitCategoryId=$outfitCategoryId";

        $response = Http::get($url);
        $responseData = $response->json();
        logger()->info('outz:', ['outz' => $responseData]);

        return view('outfitChooseByCategory', ['outfits'=>$responseData]);
    }

    public function outfitChoose(Request $request) {
        $transactionRequest = session()->get('transactionRequest');
        if ($transactionRequest == null) {
            return redirect('/bookpage');
        }

        $outfitId = (int) $request['outfitId'];

        $url = "http://localhost:8080/api/outfit/findById?id=$outfitId";

        $response = Http::get($url);
        $responseData = $response->json();

        $outfitName = $responseData['name'];
        logger()->info('outfitName:', ['outfitName' => $outfitName]);
        
        $transactionRequest->outfitId = (int) $request['outfitId'];
        session()->put('outfitName', $outfitName);
        logger()->info('transactionRequest:', ['transactionRequest' => $transactionRequest]);
        return redirect('/invoice');
    }

    public function showOutfitPreviewPage() {
        $url = "http://localhost:8080/api/outfit/findAll";

        $response = Http::get($url);
        $responseData = $response->json();
        logger()->info('outz:', ['outz' => $responseData]);

        return view('outfitpreview', ['outfits'=>$responseData]);
    }

    public function showOutfitAdminPage() {
        $url = "http://localhost:8080/api/outfit/findAll";

        $response = Http::get($url);
        $responseData = $response->json();
        logger()->info('outz:', ['outz' => $responseData]);

        return view('outfitAdmin', ['outfits'=>$responseData]);
    }

    public function showOutfitChooseByCategoryPage(Request $request) {
        $outfitCategoryId = (int) $request['outfitCategoryId'];
        session()->put('outfitCategoryId', $outfitCategoryId);
        logger()->info('outfitCategoryId:', ['outfitCategoryId' => $outfitCategoryId]);
        return redirect('/outfitchoosebycategory');
    }
    
    public function showCreateOutfitPage() {
        return view('outfitCreateFormAdmin');
    }

    // public function createOutfit(Request $request) {
    //     $request->validate([
    //         'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    //     ]);
    //     $image = $request->file('image');
    //     $imageName = $image->getClientOriginalName();
    //     $image->move(public_path('Assets/outfit'), $imageName);

    //     $outfitRequest = new OutfitRequest();
    //     $outfitRequest->outfitCategoryId = $request['outfitCategoryId'];
    //     $outfitRequest->name = $request['name'];
    //     $outfitRequest->qty = $request['qty'];
    //     $outfitRequest->image = $imageName;
    //     $user = session()->get('user'); 
    //     $outfitRequest->updatedBy = $user['id'];
    //     $response = Http::post('http://localhost:8080/api/outfit/create', $outfitRequest->toArray());
    //     $responseData = $response->json();
    //     logger()->info('outfit', ['outfit' => $responseData]);
    //     if ($responseData['statusCode']!=null) {
    //         return redirect()->back()->withInput()->with('error', $responseData['description']);
    //     } 
    //     return redirect('/outfitcategoryadmin');
    // }

    public function createOutfit(Request $request) {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $image = $request->file('image');
        $imagePath = $image->getPathname();
        $imageBase64 = base64_encode(file_get_contents($imagePath));

        $outfitRequest = new OutfitRequest();
        $outfitRequest->outfitCategoryId = $request['outfitCategoryId'];
        $outfitRequest->name = $request['name'];
        $outfitRequest->qty = $request['qty'];
        $outfitRequest->image = $imageBase64;
        $user = session()->get('user'); 
        $outfitRequest->updatedBy = $user['id'];
        $response = Http::post('http://localhost:8080/api/outfit/create', $outfitRequest->toArray());
        $responseData = $response->json();
        logger()->info('outfit', ['outfit' => $responseData]);
        if ($responseData['statusCode']!=null) {
            return redirect()->back()->withInput()->with('error', $responseData['description']);
        } 
        return redirect('/outfitadmin')->with('imageBase64', $imageBase64);
    }

    public function deleteOutfit(Request $request) {
        $outfitId = $request->input('id');
        
        $response = Http::delete("http://localhost:8080/api/outfit/delete?id={$outfitId}");
        $responseData = $response->json();

        if ($response->successful()) {
            return redirect()->back()->with('success', 'Outfit deleted successfully.');
        } else {
            $errorMessage = isset($responseData['description']) ? $responseData['description'] : 'An error occurred while deleting the outfit.';
            return redirect()->back()->with('error', $errorMessage);
        }
    }

    public function showUpdateOutfitPage(Request $request) {
        $outfitId = $request->input('id');
        $url = "http://localhost:8080/api/outfit/findById?id=$outfitId";
        $response = Http::get($url);
        $responseData = $response->json();

        logger()->info('outfitss', ['outfitss' => $responseData]);
        $outfit = $response->json();
        return view('outfitUpdateForm', ['outfit' => $outfit]);
        // if ($response->successful()) {
        //     $outfit = $response->json();
        //     return view('outfitUpdateForm', ['outfit' => $outfit]);
        // } else {
        //     $errorMessage = isset($responseData['description']) ? $responseData['description'] : 'An error occurred while retrieving the outfit.';
        //     return redirect()->back()->with('error', $errorMessage);
        // }
    }

    public function updateOutfit(Request $request, $outfitId) {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $image = $request->file('image');
        $imagePath = $image->getPathname();
        $imageBase64 = base64_encode(file_get_contents($imagePath));

        $outfitRequest = new OutfitRequest();
        $outfitRequest->outfitCategoryId = $request['outfitCategoryId'];
        $outfitRequest->name = $request['name'];
        $outfitRequest->qty = $request['qty'];
        $outfitRequest->image = $imageBase64;
        $user = session()->get('user'); 
        $outfitRequest->updatedBy = $user['id'];

        $response = Http::post("http://localhost:8080/api/outfit/update?id={$outfitId}", $outfitRequest->toArray());
        $responseData = $response->json();
        logger()->info('outfitss', ['outfitss' => $responseData]);
        // if ($responseData['statusCode'] != null) {
        //     return redirect()->back()->withInput()->with('error', $responseData['description']);
        // } 
        return redirect('/outfitadmin')->with('imageBase64', $imageBase64);
    }

}

