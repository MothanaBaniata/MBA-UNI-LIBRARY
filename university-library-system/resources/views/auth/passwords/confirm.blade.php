@extends('layouts.user_master')

@section('content')
    <section class="heading-page header-text">
        <div class="container d-flex justify-content-center align-items-center">
            <div class="col-md-6 col-lg-4">
                <div class="card shadow-lg rounded-3">
                    <div class="card-header bg-custom-red text-white text-center">
                        <h4>{{ __('Confirm Password') }}</h4>
                    </div>
                    <div class="card-body">
                        <p class="text-center">{{ __('Please confirm your password before continuing.') }}</p>

                        <form method="POST" action="{{ route('password.confirm') }}">
                            @csrf

                            <!-- Password Input -->
                            <div class="mb-3">
                                <label for="password" class="form-label">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <div class="invalid-feedback">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>

                            <!-- Submit Button -->
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-custom-red btn-lg">
                                    {{ __('Confirm Password') }}
                                </button>
                            </div>

                            <!-- Forgot Password Link -->
                            @if (Route::has('password.request'))
                                <div class="mt-3 text-center">
                                    <a href="{{ route('password.request') }}" class="text-muted">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                </div>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
