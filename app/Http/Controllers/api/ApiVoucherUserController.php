<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Voucher;
use App\Models\VoucherUser;
use Illuminate\Http\Request;

class ApiVoucherUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return VoucherUser[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Http\Response
     */
    public function index()
    {
        $vouchers = VoucherUser::all();
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
        return VoucherUser::create($request->all());
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
        return VoucherUser::where('id',$id)->update($request->all());
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
