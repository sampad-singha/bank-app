<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;

class InterestController extends Controller
{
    public function calculateInterest()
    {
        $request = Account::all();


        $principal = $request->get('amount');
        $interestRate = 7.8/100; // Convert to decimal
//        $days = $request->input('days');

        $finalAmount = $principal * $interestRate * (1/365);

//        $dailyInterest = $finalAmount - $principal;
        $request->update(['balance' => $request->get('balance') + $finalAmount]);


    }

}
