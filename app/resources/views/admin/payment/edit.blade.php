@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <x-payment-details
                    :route="route('admin.payments.update', ['id' => $payment->id])"
                    method="PATCH"
                    :btn-text="__('Update')"
                    :name="$payment->name"
                    :phone="$payment->phone"
                    :email="$payment->email"
                    :amount="$payment->amount"
                />
            </div>
        </div>
    </div>
@endsection
