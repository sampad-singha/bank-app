<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PersonalAccountController extends Controller
{
    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('forms.p-account');
    }
    public function storeAccountInfo(Request $request): \Illuminate\Http\RedirectResponse
    {
        $account = new Account();


        $account->account_holder_name = $request->account_holder_name;
        $account->account_type = $request->account_type;
        $account->account_holder = $request->account_holder;
        $account->dob = $request->dob;
        $account->gender = $request->gender;
        $account->email = $request->email;
        $account->mobile = $request->mobile;
        $account->father_name = $request->father_name;
        $account->mother_name = $request->mother_name;
        $account->spouse_name = $request->spouse_name;
        $account->nid = $request->nid;
        $account->tin = $request->tin;
        $account->passport = $request->passport;
        $account->nationality = $request->nationality;
        $account->occupation = $request->occupation;
        $account->income = $request->income;
        $account->income_source = $request->income_source;
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
        $account->ref_name = $request->ref_name;
        $account->ref_account_no = $request->ref_account_no;

        $image = $request->file('image');
        $image_name = time() . '-' . $request->email. '.' . $image->extension();
        $image->storeAs('public/images', $image_name);
        $account->image_path = $image_name;
        // $account->image_path = '$request->image_path';
//        dd($account->image_path);

        $account->save();
        return back()->with('success', 'Account created successfully');

    }
    public function showAccountInfo(){
        // dd($user_email = Auth::user()->email);
        $user_email = Auth::user()->email;
//        dd($user_email);
        $account = DB::table('accounts')->where('email', $user_email)->get();
        if($account->isEmpty()){
            $ac = "No account found";
//            return view('dashboard', compact('ac'))->with('success', $ac);
            Auth::logout();
            return view('welcome');
        }

        $ac = $account[0];

        return view('dashboard', compact('ac'))->with('success', $ac);
    }
}
