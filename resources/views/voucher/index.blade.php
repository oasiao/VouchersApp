@extends('layouts.voucher-app')
@section('title','VoucherApp')
@section('content')
    @foreach( $vouchers as $voucher )
        @if( date($voucher->valid_date) > date(\Carbon\Carbon::now()) )
        <div class="container mt-5">
            <div class="d-flex justify-content-center row">
                <div class="col-md-6">
                    <div class="coupon p-3 bg-white">
                        <div class="row no-gutters">
                            <div class="col-md-4 border-right">
                                <div class="d-flex flex-column align-items-center"><span class="d-block">Valid until</span><span class="text-black-50">{{ $voucher->valid_date }}</span></div>
                            </div>
                            <div class="col-md-8">
                                <div>
                                    <div class="d-flex flex-row justify-content-end off">
                                        <h1>{{ $voucher->value }}</h1><span>€</span>
                                    </div>
                                    <button class="create btn btn-primary" voucher_code="{{ $voucher->id }}" user_id="{{ Auth::user()->id }}">Get voucher</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
    @endforeach
@endsection
