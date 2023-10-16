<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    public function transactions(){
        $email = Auth::user()->email;
        $account_no = DB::table('accounts')
            ->where('email', $email)
            ->get('account_no');
        $account_no = $account_no[0]->account_no;
        $transactions = DB::table('transactions')
            ->where('account_no', $account_no)
            ->latest()
            ->paginate(10);
//        return view('dashboard', compact('transactions'))->with('success', $transactions);
        return $transactions;
    }
    public function withdraw(Request $request){
        $email = Auth::user()->email;
        $account_no = DB::table('accounts')
            ->where('email', $email)
            ->get('account_no');
        $account_no = $account_no[0]->account_no;
        $balance = DB::table('accounts')
            ->where('account_no', $account_no)
            ->get('balance');
        $balance = $balance[0]->balance;
        if($balance >= $request->amount){
            $trx = hash('sha256', $account_no . $request->amount . time());
            DB::table('transactions')->insert([
                'account_no' => $account_no,
                'type' => 'withdrawal',
                'trx_no' => $trx,
                'amount' => $request->amount,
                'status' => 'Pending',
                'created_at' => now(),
            ]);
            return back()->with('success', 'Withdrawal request sent');
        }
        else{
            return back()->with('success', 'Insufficient balance');
        }

    }
}
