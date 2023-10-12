<?php

namespace App\Models;

use App\Enums\GenderStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Account extends Model
{
    use HasFactory;

    protected $primaryKey = 'account_id';

    protected $fillable = [
        'account_type',
        'account_holder',
        'dob',
        'gender',
        'email',
        'mobile',
        'father_name',
        'mother_name',
        'spouse_name',
        'nid',
        'tin',
        'passport',
        'nationality',
        'occupation',
        'income',
        'income_source',
        'division',
        'district',
        'thana',
        'post_code',
        'house_road',
        'p_division',
        'p_district',
        'p_thana',
        'p_post_code',
        'p_house_road',
        'ref_name',
        'ref_account_no',
        'image_path',
        'account_holder_name',
        'status',
        'primary_deposit',
        'balance',
        'account_no',
        'branch_code',
        'branch_name',
    ];

    public function accounts():HasMany
    {
        return $this->hasMany(Transaction::class, 'account_id');
    }
    public function user():HasOne
    {
        return $this->hasOne(User::class, 'account_no');
    }
    public function branches():BelongsTo
    {
        return $this->belongsTo(Branch::class, 'branch_id');
    }
//    protected static function boot()
//    {
//        parent::boot();
//        static::creating(function ($account){
//            if($account->status == 'Accepted') {
//                $temp = $account->branch_code . $account->account_id;
//                $account->account_no = intval($temp);
//
//                $account->balance = $account->primary_deposit;
//            }
//        });
//    }

}
