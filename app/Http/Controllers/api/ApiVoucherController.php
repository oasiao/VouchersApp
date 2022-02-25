<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\VoucherHelper;
use App\Models\Voucher;
use Illuminate\Http\Request;

class ApiVoucherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vouchers = Voucher::all();
        return $vouchers;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*protected $fillable = ['code','value','valid_date','redeemed','user_id'];*/
        $helper = new VoucherHelper;

        //$user_id = Auth::user()->id === null ? Auth::user()->id : $request->user_id;

        return Voucher::create([
            'id' => $helper->str_random(15),
            'value' => $request->value,
            'valid_date' => $request->valid_date
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
