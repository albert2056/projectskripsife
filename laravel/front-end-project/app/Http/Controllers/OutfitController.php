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
        logger()->info('outfitId:', ['outfitId' => $outfitId]);
        $transactionRequest = session()->get('transactionRequest');
        $transactionRequest->outfitId = (int) $request['outfitId'];
        logger()->info('transactionRequest:', ['transactionRequest' => $transactionRequest]);
        return redirect('/invoice');
    }

    public function showOutfitByOutfitCategoryIdPageAdmin() {
        return view ('outfitCategoryAdmin');
    }

    public function showOutfitPreview() {
        return view('outfitCategoryPreview');
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

