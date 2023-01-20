<div class="card">
    <div class="card-header">{{ __('Payment Details') }}</div>

    <div class="card-body">
        <form method="POST" action="{{ $route }}">
            @method($method)
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
                        value="{{ $name ?? '' }}"
                        autofocus
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
                        value="{{ $phone ?? '' }}"
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
                        value="{{ $email ?? '' }}"
                        class="form-control"
                        name="email"
                        autocomplete="email"
                        required
                    >
                </div>
            </div>

            <div class="row mb-3">
                <label for="amount"
                       class="col-md-4 col-form-label text-md-end">{{ __('Amount') }}</label>

                <div class="col-md-6">
                    <input
                        id="amount"
                        type="number"
                        value="{{ $amount ?? '' }}"
                        class="form-control"
                        name="amount"
                        required
                    >
                </div>
            </div>

            <div class="row mb-0">
                <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ $btnText }}
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
