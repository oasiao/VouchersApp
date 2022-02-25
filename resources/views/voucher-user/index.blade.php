@extends('layouts.voucher-app')
@section('title','myVouchers')
@section('content')

    @forelse( $vouchers as $voucher )

        @foreach( $myVouchers as $myVoucher)
            @if ( $myVoucher->id === $voucher->voucher_code )
                <div class="container mt-5">
                    <div class="d-flex justify-content-center row">
                        <div class="col-md-6">
                            <div class="coupon p-3 bg-white">
                                <div class="row no-gutters">
                                    <div class="col-md-4 border-right">
                                        <div class="d-flex flex-column align-items-center"><span class="d-block">Valid until</span><span
                                                class="text-black-50">{{ $myVoucher->valid_date }}</span></div>
                                    </div>
                                    <div class="col-md-8">
                                        <div>
                                            <div class="d-flex flex-row justify-content-end off">
                                                <h1>{{ $myVoucher->value }}</h1><span>€</span>
                                            </div>
                                            @if( $voucher->redeemed )
                                                <div class="btn btn-danger">Voucher redeemed</div>
                                            @elseif ( date($myVoucher->valid_date) < date(\Carbon\Carbon::now()) )
                                                <div class="btn btn-danger">Voucher expired</div>
                                            @else
                                                <button class="use btn btn-primary" voucher_id="{{ $voucher->id }}"
                                                        voucher_code="{{ $voucher->voucher_code }}">Use voucher
                                                </button>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            @endif

        @endforeach
            @empty
                <div class="alert alert-warning text-center" role="alert">
                    You don't have any voucher! Click <a href="{{ route('vouchers.index') }}">here</a> to get some!
                </div>
    @endforelse
@endsection
