@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="{{ route('admin.payments.create') }}" class="btn btn-success">
            {{ __('Create Payment') }}
        </a>

        <form method="GET" action="{{ route('admin.payments.list') }}" class="d-flex my-4">
            <input
                class="form-control mx-1"
                type="search"
                placeholder="Search"
                name="search"
                value="{{ $searchQuery ?? '' }}"
            >
            <button class="btn btn-outline-success mx-1" type="submit">{{ __('Search') }}</button>
        </form>

        <table class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col" class="text-center">{{ __('ID') }}</th>
                <th scope="col" class="text-center">{{ __('Phone Number') }}</th>
                <th scope="col" class="text-center">{{ __('Name') }}</th>
                <th scope="col" class="text-center">{{ __('E-mail') }}</th>
                <th scope="col" class="text-center">{{ __('Amount') }}</th>
                <th scope="col" class="text-center">{{ __('Actions') }}</th>
            </tr>
            </thead>
            <tbody>
            @foreach($payments as $payment)
                <tr>
                    <th scope="row" class="text-center">{{ $payment->id }}</th>
                    <td class="text-center">{{ $payment->phone }}</td>
                    <td class="text-center">{{ $payment->name ?? '——' }}</td>
                    <td class="text-center">{{ $payment->email }}</td>
                    <td class="text-center">$ {{ $payment->amount }}</td>
                    <td class="d-flex justify-content-center">
                        <a
                            href="{{ route('admin.payments.edit', ['id' => $payment->id]) }}"
                            class="btn btn-warning mx-1"
                        >
                            {{ __('Edit') }}
                        </a>

                        <form
                            method="POST"
                            action="{{ route('admin.payments.destroy', ['id' => $payment->id]) }}"
                            class="mx-1"
                        >
                            @method('DELETE')
                            @csrf

                            <button type="submit" class="btn btn-danger">{{ __('Destroy') }}</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
