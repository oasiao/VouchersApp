@extends('layouts.voucher-app')
@section('title','myVouchers')
@section('content')

    @foreach( $vouchers as $voucher )

        @foreach( $myVouchers as $myVoucher)
            @if ( $myVoucher->id === $voucher->voucher_code )
                <div class="card">
                    <div class="card-header">
                        {{ $myVoucher->value }}
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Valid until {{ $myVoucher->valid_date }}</h5>
                        <p class="card-text">Get your voucher!</p>
                        @if( $voucher->redeemed )
                            <div class="btn btn-danger">Voucher redeemed</div>
                        @elseif ( date($myVoucher->valid_date) < date(\Carbon\Carbon::now()) )
                            <div class="btn btn-danger">Voucher expired</div>
                        @else
                            <button class="use btn btn-primary" voucher_id="{{ $voucher->id }}" voucher_code="{{ $voucher->voucher_code }}">Use voucher</button>
                        @endif
                    </div>
                </div>
            @endif
        @endforeach
    @endforeach
@endsection
