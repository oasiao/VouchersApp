<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    use HasFactory;

    protected $table = 'vouchers';

    protected $fillable = ['id','value','valid_date','redeemed','user_id'];

    protected $casts = [
        'id' => 'string',
    ];

    //MANY TO MANY
    public function users() {
        return $this->belongsToMany(User::class);
    }
}
