@extends('layouts.user_master')

@section('title', 'Edit Profile - University Library System')

@section('content')

    <section class="heading-page header-text" id="top">
        <div class="container">
            <h2>Edit Profile</h2>

            <!-- Display Success Message -->
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Edit Profile Form -->
            <form action="{{ route('profile.update') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <!-- Name Field -->
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control"
                                value="{{ old('name', $user->name) }}" required>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <!-- Email Field -->
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control"
                                value="{{ old('email', $user->email) }}" required>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="password">Password (Leave blank to keep current password)</label>
                    <input type="password" name="password" id="password" class="form-control"
                        placeholder="New password (optional)">
                </div>

                <div class="form-group">
                    <label for="password_confirmation">Confirm Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control"
                        placeholder="Confirm new password">
                </div>

                <button type="submit" class="btn btn-primary">Update Profile</button>
            </form>
        </div>
    </section>

@endsection
