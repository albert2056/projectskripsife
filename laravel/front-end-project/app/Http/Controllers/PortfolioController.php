<?php

namespace App\Http\Controllers;

use App\Models\PortfolioRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PortfolioController extends Controller
{
    public function showPortfolioPage() {
        $url = "http://localhost:8080/api/portfolio/findAll";

        $response = Http::get($url);
        $responseData = $response->json();
        logger()->info('portfolio:', ['portfolio' => $responseData]);
        return view('portfolio', ['portfolios'=>$responseData]);
    }
    
    public function showPortfolioAdminPage() {
        $url = "http://localhost:8080/api/portfolio/findAll";

        $response = Http::get($url);
        $responseData = $response->json();
        logger()->info('portfolio:', ['portfolio' => $responseData]);
        return view('portfolioAdmin', ['portfolios'=>$responseData]);
    }

    public function createPortfolio(Request $request) {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $image = $request->file('image');
        $imageName = $image->getClientOriginalName();
        $image->move(public_path('Assets/portfolio'), $imageName);

        $portfolioRequest = new PortfolioRequest();
        $portfolioRequest->name = $request['name'];
        $portfolioRequest->eventDate = $request['eventDate'];
        $portfolioRequest->image = $imageName;
        $portfolioRequest->gownName = $request['gownName'];
        $portfolioRequest->venue = $request['venue'];
        $portfolioRequest->wo = $request['wo'];
        $portfolioRequest->column = 1;
        $portfolioRequest->eventName = 'Wedding';
        $response = Http::post('http://localhost:8080/api/portfolio/create', $portfolioRequest->toArray());
        $responseData = $response->json();
        logger()->info('portfolio', ['portfolio' => $responseData]);
        if ($responseData['statusCode']!=null) {
            return redirect()->back()->withInput()->with('error', $responseData['description']);
        } 
        return redirect('/portfolioadmin');
    }

    public function deletePortfolio(Request $request) {
        $portfolioId = $request->input('id');
        
        $response = Http::delete("http://localhost:8080/api/portfolio/delete?id={$portfolioId}");
        $responseData = $response->json();

        if ($response->successful()) {
            return redirect()->back()->with('success', 'Portfolio deleted successfully.');
        } else {
            $errorMessage = isset($responseData['description']) ? $responseData['description'] : 'An error occurred while deleting the portfolio.';
            return redirect()->back()->with('error', $errorMessage);
        }
    }

    public function showUpdatePortfolioPage(Request $request) {
        $portfolioId = $request->input('id');
        $url = "http://localhost:8080/api/portfolio/findById?id=$portfolioId";
        $response = Http::get($url);
        $responseData = $response->json();

        logger()->info('portfss', ['portfs' => $responseData]);
        // $outfit = $response->json();
        // return view('outfitUpdateForm', ['outfit' => $outfit]);
        if ($response->successful()) {
            $portfolio = $response->json();
            return view('portfolioUpdateForm', ['portfolio' => $portfolio]);
        } else {
            $errorMessage = isset($responseData['description']) ? $responseData['description'] : 'An error occurred while retrieving the portfolio.';
            return redirect()->back()->with('error', $errorMessage);
        }
    }

    public function updatePortfolio(Request $request, $portfolioId) {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $image = $request->file('image');
        $imageName = $image->getClientOriginalName();
        $image->move(public_path('Assets/portfolio'), $imageName);

        $portfolioRequest = new PortfolioRequest();
        $portfolioRequest->name = $request['name'];
        $portfolioRequest->eventDate = $request['eventDate'];
        $portfolioRequest->image = $imageName;
        $portfolioRequest->gownName = $request['gownName'];
        $portfolioRequest->venue = $request['venue'];
        $portfolioRequest->wo = $request['wo'];
        $portfolioRequest->column = 1;
        $portfolioRequest->eventName = 'Wedding';
        $response = Http::post("http://localhost:8080/api/portfolio/update?id={$portfolioId}", $portfolioRequest->toArray());
        $responseData = $response->json();
        logger()->info('portfolio', ['portfolio' => $responseData]);
        if ($response->successful()) {
            $portfolio = $response->json();
            return redirect('/portfolioadmin');
        } else {
            $errorMessage = isset($responseData['description']) ? $responseData['description'] : 'An error occurred while retrieving the portfolio.';
            return redirect()->back()->with('error', $errorMessage);
        }
        

    }

    public function createPortfolioPage() {
        return view('portfolioCreateForm');
    }

    public function showPortfolioDetailPage() {
        return view('portfolioDetail');
    }

}
