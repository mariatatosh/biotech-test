@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <x-payment-details
                    amount="{{ random_int(100, 500) }}"
                    route="{{ route('payment.store') }}"
                    btn-text="{{ __('Pay') }}"
                />
            </div>
        </div>
    </div>
@endsection
