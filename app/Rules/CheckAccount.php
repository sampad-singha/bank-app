<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Support\Facades\DB;

class CheckAccount implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if(!(DB::table('accounts')->where('account_no', $value)->exists())){
//            $fail(__('validation.exists', ['attribute' => $attribute]));
            $fail('Account number does not exist.');
        }
        $status = DB::table('accounts')->where('account_no', $value)->value('status');
        if($status == 'Pending'){
            $fail('Account opening application is pending.');
        }
    }
}
