<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;

class PersonalAccountController extends Controller
{
    public function index()
    {
        return view('forms.p-account');
    }
    public function storeAccountInfo(Request $request){
        $account = new Account();
        $account->account_holder_name = $request->name;
        $account->acc_type = $request->account_type;
        $account->holder_type = $request->account_holder;
        $accoutn->dob = $request->dob;
        $account->father_name = $request->father_name;
        $account->mother_name = $request->mother_name;
        $account->spouse_name = $request->spouse_name;
        $account->nationality = $request->nationality;
        $account->gender = $request->gender;
        $account->occupation = $request->occupation;
        $account->income = $request->income;
        $account->income_source = $request->income_source;
        $account->tin = $request->tin;
        $account->division = $request->division;
        $account->district = $request->district;
        $account->thana = $request->thana;
        $account->post_code = $request->post_code;
        $account->house_road = $request->house_road;
        $account->p_division = $request->p_division;
        $account->p_district = $request->p_district;
        $account->p_thana = $request->p_thana;
        $account->p_post_code = $request->p_post_code;
        $account->p_house_road = $request->p_house_road;
        $account->mobile = $request->mobile;
        $account->email = $request->email;
        $account->nid = $request->nid;
        $account->passport = $request->passport;
        $account->ref_name = $request->ref_name;
        $account->ref_acc = $request->ref_account_no;
        
    }
}
