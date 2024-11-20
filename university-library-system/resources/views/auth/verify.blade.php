@extends('layouts.user_master')

@section('content')
    <section class="heading-page header-text">
        <div class="container d-flex justify-content-center align-items-center">
            <div class="col-md-6 col-lg-4">
                <div class="card shadow-lg rounded-3">
                    <div class="card-header bg-custom-red text-white text-center">
                        <h4>{{ __('Verify Your Email Address') }}</h4>
                    </div>
                    <div class="card-body">
                        @if (session('resent'))
                            <div class="alert alert-success" role="alert">
                                {{ __('A fresh verification link has been sent to your email address.') }}
                            </div>
                        @endif

                        <p>{{ __('Before proceeding, please check your email for a verification link.') }}</p>
                        <p>{{ __('If you did not receive the email') }},
                            <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                                @csrf
                                <button type="submit" class="btn btn-link p-0 m-0 align-baseline text-custom-red">
                                    {{ __('click here to request another') }}
                                </button>.
                            </form>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
