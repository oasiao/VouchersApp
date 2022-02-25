@extends('layouts.voucher-app')
@section('title','VoucherApp')
@section('content')
    @foreach( $vouchers as $voucher )
        @if( date($voucher->valid_date) > date(\Carbon\Carbon::now()) )
        <div class="card">
            <div class="card-header">
                {{ $voucher->value }}
            </div>
            <div class="card-body">
                <h5 class="card-title">Valid until {{ $voucher->valid_date }}</h5>
                <p class="card-text">Get your voucher!</p>
                <button class="create btn btn-primary" voucher_code="{{ $voucher->id }}" user_id="{{ Auth::user()->id }}">Get voucher</button>
            </div>
        </div>
        @endif
    @endforeach
@endsection
