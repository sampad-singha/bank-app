<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
//        dd(Auth::user()->account()->where('email', Auth::user()->email)->first()->account_no);
//        dd(Auth::user()->account->image_path);
        $ac = (new PersonalAccountController)->showAccountInfo();
//        dd($ac);
        $transactions = (new TransactionController)->transactions();
//        dd($transactions);
        return view('dashboard', compact('transactions', 'ac'));
    }
}
