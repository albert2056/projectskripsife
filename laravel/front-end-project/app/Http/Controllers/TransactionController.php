<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function showAdminTransactionPage() {
        return view('transactionAdmin');
    }

    public function showBookPage() {
        return view('bookForm');
    }
}
