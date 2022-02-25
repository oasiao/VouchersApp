@extends('layouts.voucher-app')
@section('title','VoucherApp')
@section('content')
    @foreach( $vouchers as $voucher )
        <div class="card">
            <div class="card-header">
                {{ $voucher->value }}
            </div>
            <div class="card-body">
                <h5 class="card-title">Valid until {{ $voucher->valid_date }}</h5>
                <p class="card-text">Get your voucher!</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    @endforeach
@endsection
