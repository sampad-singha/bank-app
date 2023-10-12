<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Account;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use App\Rules\CheckAccount;
use App\Rules\CheckEmail;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Illuminate\Support\Facades\Redirect;
use PHPUnit\Metadata\After;


class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {

        $request->validate([
            'account_no' => ['required', 'digits:10', new CheckAccount()],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class, new CheckEmail()],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
//        dd($request->account_no);
        $user = User::create([
//            'name' => $request->name,
            'name' => DB::table('accounts')->where('account_no', $request->account_no)->value('account_holder_name'),
            'account_no'=> $request->account_no,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect()->intended(RouteServiceProvider::HOME);
    }
}
