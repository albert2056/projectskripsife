<?php

namespace App\Http\Controllers;

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
}

