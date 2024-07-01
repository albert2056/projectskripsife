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

    // salah penamaan, ini buat pilih kategori
    public function showOutfitChooseByCategoryPage(Request $request) {
        $outfitCategoryId = (int) $request['outfitCategoryId'];
        session()->put('outfitCategoryId', $outfitCategoryId);
        return redirect('/outfitchoosebycategory');
    }

    // ini buat nampilin halaman pilih outfitnya
    public function showOutfitByOutfitCategoryIdPage() {
        $transactionRequest = session()->get('transactionRequest');
        if ($transactionRequest == null) { 
            return redirect('/bookpage');
        }
        
        $outfitCategoryId = session()->get('outfitCategoryId');
        $url = "http://localhost:8080/api/outfit/findByOutfitCategoryId?outfitCategoryId=$outfitCategoryId";

        $response = Http::get($url);
        $responseData = $response->json();

        return view('outfitChooseByCategory', ['outfits'=>$responseData]);
    }

    //pilih outfit akhir
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
        
        $transactionRequest->outfitId = (int) $request['outfitId'];
        session()->put('outfitName', $outfitName);
        return redirect('/invoice');
    }

    public function showOutfitPreviewPage() {
        $url = "http://localhost:8080/api/outfit/findAll";

        $response = Http::get($url);
        $responseData = $response->json();

        return view('outfitpreview', ['outfits'=>$responseData]);
    }

    public function showOutfitAdminPage() {
        $url = "http://localhost:8080/api/outfit/findAll";

        $response = Http::get($url);
        $responseData = $response->json();

        return view('outfitAdmin', ['outfits'=>$responseData]);
    }

    public function showCreateOutfitPage() {
        return view('outfitCreateFormAdmin');
    }

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
        Http::post('http://localhost:8080/api/outfit/create', $outfitRequest->toArray());
        return redirect('/outfitadmin');
    }

    public function deleteOutfit(Request $request) {
        $outfitId = $request->input('id');
        Http::delete("http://localhost:8080/api/outfit/delete?id={$outfitId}");
        return redirect()->back()->with('success', 'Outfit deleted successfully.');
        
    }

    public function showUpdateOutfitPage(Request $request) {
        $outfitId = $request->input('id');
        $url = "http://localhost:8080/api/outfit/findById?id=$outfitId";
        $response = Http::get($url);

        $outfit = $response->json();
        return view('outfitUpdateForm', ['outfit' => $outfit]);
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
        Http::post("http://localhost:8080/api/outfit/update?id={$outfitId}", $outfitRequest->toArray());

        return redirect('/outfitadmin');
    }

}

