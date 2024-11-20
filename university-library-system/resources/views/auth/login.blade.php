@extends('layouts.user_master')

@section('content')
    <section class="heading-page header-text">
        <div class="container d-flex justify-content-center align-items-center">
            <div class="col-md-6 col-lg-4">
                <div class="card shadow-lg rounded-3">
                    <div class="card-header bg-custom-red text-white text-center">
                        <h4>{{ __('Login') }}</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <!-- Email Input -->
                            <div class="mb-3">
                                <label for="email" class="form-label">{{ __('Email Address') }}</label>
                                <input id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <div class="invalid-feedback">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>

                            <!-- Password Input -->
                            <div class="mb-3">
                                <label for="password" class="form-label">{{ __('Password') }}</label>
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="current-password">
                                @error('password')
                                    <div class="invalid-feedback">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>

                            <!-- Remember Me Checkbox -->
                            <div class="mb-3 form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                    {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>

                            <!-- Submit Button -->
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-custom-red btn-lg">
                                    {{ __('Login') }}
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

                            <!-- Register Link -->
                            <div class="mt-3 text-center">
                                <p class="mb-0">Don't have an account? <a href="{{ route('register') }}" class="text-custom-red">{{ __('Register') }}</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
