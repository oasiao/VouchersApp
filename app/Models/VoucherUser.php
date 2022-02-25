<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VoucherUser extends Model
{
    use HasFactory;
    protected $table = 'users_vouchers';
    protected $primaryKey = null;
    public $incrementing = false;
    protected $fillable = ['user_id','voucher_code'];
}
