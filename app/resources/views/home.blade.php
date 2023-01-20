@extends('layouts.app')

@php
    $amount = random_int(100, 500);
@endphp

@section('content')
    @if(Session::has('alert'))
        <x-alert
            type="{{ Session::get('alert')['type'] }}"
            message="{{ Session::get('alert')['message'] }}"
        />
    @endif

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Payment Details') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('payment.store') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="name"
                                       class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input
                                        id="name"
                                        type="text"
                                        class="form-control"
                                        name="name"
                                        autocomplete="name"
                                    >
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="phone"
                                       class="col-md-4 col-form-label text-md-end">{{ __('Phone Number') }}</label>

                                <div class="col-md-6">
                                    <input
                                        id="phone"
                                        type="tel"
                                        class="form-control"
                                        name="phone"
                                        autocomplete="tel"
                                        required
                                    >
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email"
                                       class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input
                                        id="email"
                                        type="email"
                                        class="form-control"
                                        name="email"
                                        autocomplete="email"
                                        required
                                        autofocus
                                    >
                                </div>
                            </div>

                            <input type="hidden" value="{{ $amount }}" name="amount" required>

                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __(sprintf('Pay $%d', $amount)) }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
