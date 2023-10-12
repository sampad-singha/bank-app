<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\DataAwareRule;
use Illuminate\Contracts\Validation\InvokableRule;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Support\Facades\DB;

class CheckEmail extends CheckAccount implements ValidationRule, DataAwareRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    protected $data = [];

    public function setData(array $data)
    {
        $this->data = $data;
        return $this;
    }

    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $account_no = $this->data['account_no'];
        $email = DB::table('accounts')->where('account_no', $account_no)->value('email');
        if($email != $value){
            $fail('Email does not match with account number.');
        }
    }
}
