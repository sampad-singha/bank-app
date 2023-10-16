<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Transaction extends Model
{
    use HasFactory;

//    protected $primaryKey = 'transaction_id';

    protected $fillable = [
        'account_no',
        'type',
        'trx_no',
        'receiver_account_no',
        'amount',
        'new_balance',
        'status'
    ];

    public function transactions(): BelongsTo
    {
        return $this->BelongsTo(Account::class, 'account_no');
    }
}
