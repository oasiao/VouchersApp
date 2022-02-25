<?php

namespace App\Http\Controllers;

use App\Http\Controllers\api\ApiVoucherUserController;
use App\Models\Voucher;
use Illuminate\Http\Request;

class VoucherUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $api = new ApiVoucherUserController;
        $vouchers = $api->index();
        $myVouchers = $this->myVouchers(Auth()->user());
        return view('voucher-user.index',compact('vouchers','myVouchers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('voucher-user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $api = new ApiVoucherUserController();
        $voucher = $api->show($id);
        return view('edit',compact('voucher'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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

    public function myVouchers($user){

        $voucher_ids = $user->vouchers()->allRelatedIds()->toArray();

        $myVouchers = [];
        foreach ($voucher_ids as $id){
            array_push($myVouchers,Voucher::find($id));
        }
        return $myVouchers;
    }
}
