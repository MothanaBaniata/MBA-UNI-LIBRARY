<!-- resources/views/admin/users/show.blade.php -->
@extends('layouts.admin_master')


@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">User Details</h4>
            </div>
            <div class="card-body">
                <ul>
                    <li><strong>Name:</strong> {{ $user->name }}</li>
                    <li><strong>Email:</strong> {{ $user->email }}</li>
                    <li><strong>Role:</strong> {{ $user->role }}</li>
                    <li><strong>Created At:</strong> {{ $user->created_at->format('Y-m-d') }}</li>
                </ul>
                <a href="{{ route('admin.users.index') }}" class="btn btn-secondary">Back to Users</a>
            </div>
        </div>
    </div>
</div>
@endsection
