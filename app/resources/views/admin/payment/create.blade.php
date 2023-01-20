@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <x-payment-details
                    :route="route('admin.payments.store')"
                    :btn-text="__('Create')"
                />
            </div>
        </div>
    </div>
@endsection
