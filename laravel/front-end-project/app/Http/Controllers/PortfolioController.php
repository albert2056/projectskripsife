<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function showPortfolioPage() {
        return view('portfolio');
    }
    
    public function showPortfolioAdminPage() {
        return view('portfolioAdmin');
    }

    public function createPortfolioPage() {
        return view('portfolioCreateForm');
    }

    public function showPortfolioDetailPage() {
        return view('portfolioDetail');
    }

}
