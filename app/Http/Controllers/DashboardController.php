<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $ac = (new PersonalAccountController)->showAccountInfo();
//        dd($ac);
        $transactions = (new TransactionController)->transactions();
//        dd($transactions);
        return view('dashboard', compact('transactions', 'ac'));
    }
}
