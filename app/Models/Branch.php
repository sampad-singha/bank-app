<?php

namespace App\Models;

use http\Env\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Branch extends Model
{
    use HasFactory;

    protected $fillable = [
        'branch_name',
        'id',
        'branch_code',
    ];

    public function account():HasMany
    {
        return $this->hasMany(Account::class, 'branch_id');
    }
    protected static function boot()
    {
        parent::boot();
        static::creating(function ($branch){
            $initial = substr($branch->branch_name, 0, 3);
            $arr = array(ord(strtoupper($initial[0])), ord(strtoupper($initial[1])), ord(strtoupper($initial[2])));
            $arr = $arr[0].$arr[1].$arr[2];
            $branch->branch_code = intval($arr);
        });
    }
}
