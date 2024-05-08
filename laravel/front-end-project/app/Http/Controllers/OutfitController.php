<?php

namespace App\Http\Controllers;

use App\Models\OutfitRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class OutfitController extends Controller
{
    public function showOutfitChoosePage() {
        return view('outfitChoose');
    }

    public function showOutfitByOutfitCategoryIdPage() {
        $outfitCategoryId = session()->get('outfitCategoryId');
        $url = "http://localhost:8080/api/outfit/findByOutfitCategoryId?outfitCategoryId=$outfitCategoryId";

        $response = Http::get($url);
        $responseData = $response->json();
        logger()->info('outz:', ['outz' => $responseData]);

        return view('outfitCategory', ['outfits'=>$responseData]);
    }

    public function outfitChoose(Request $request) {
        $outfitId = (int) $request['outfitId'];

        $url = "http://localhost:8080/api/outfit/findById?outfitId=$outfitId";

        $response = Http::get($url);
        $responseData = $response->json();

        $outfitName = $responseData['name'];
        logger()->info('outfitName:', ['outfitName' => $outfitName]);
        $transactionRequest = session()->get('transactionRequest');
        $transactionRequest->outfitId = (int) $request['outfitId'];
        session()->put('outfitName', $outfitName);
        logger()->info('transactionRequest:', ['transactionRequest' => $transactionRequest]);
        return redirect('/invoice');
    }

    public function showOutfitPreview() {
        $url = "http://localhost:8080/api/outfit/findAll";

        $response = Http::get($url);
        $responseData = $response->json();
        logger()->info('outz:', ['outz' => $responseData]);

        return view('outfitCategoryPreview', ['outfits'=>$responseData]);
    }

    public function showOutfitByOutfitCategoryIdPageAdmin() {
        $url = "http://localhost:8080/api/outfit/findAll";

        $response = Http::get($url);
        $responseData = $response->json();
        logger()->info('outz:', ['outz' => $responseData]);

        return view('outfitCategoryAdmin', ['outfits'=>$responseData]);
    }

    public function showOutfitByCategoryId() {
        return view();
    }

    public function outfitCategoryChoose(Request $request) {
        $outfitCategoryId = (int) $request['outfitCategoryId'];
        session()->put('outfitCategoryId', $outfitCategoryId);
        logger()->info('outfitCategoryId:', ['outfitCategoryId' => $outfitCategoryId]);
        return redirect('/outfitcategory');
    }
    
    public function createOutfitPage() {
        return view('outfitCreateFormAdmin');
    }

    public function createOutfit(Request $request) {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $image = $request->file('image');
        $imageName = $image->getClientOriginalName();
        $image->move(public_path('Assets/outfit'), $imageName);

        $outfitRequest = new OutfitRequest();
        $outfitRequest->outfitCategoryId = $request['outfitCategoryId'];
        $outfitRequest->name = $request['name'];
        $outfitRequest->qty = $request['qty'];
        $outfitRequest->image = $imageName;
        $response = Http::post('http://localhost:8080/api/outfit/create', $outfitRequest->toArray());
        $responseData = $response->json();
        logger()->info('outfit', ['outfit' => $responseData]);
        if ($responseData['statusCode']!=null) {
            return redirect()->back()->withInput()->with('error', $responseData['description']);
        }
        return redirect('/outfitcategoryadmin');
    }
}

