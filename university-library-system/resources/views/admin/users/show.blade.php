@extends('layouts.admin_master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Student Details</h4>
                </div>
                <div class="card-body">
                    <ul>
                        <li><strong>Name:</strong> {{ $user->name }}</li>
                        <li><strong>Email:</strong> {{ $user->email }}</li>
                        <li><strong>Created At:</strong> {{ $user->created_at->format('Y-m-d') }}</li>
                    </ul>
                    <a href="{{ route('admin.users.index') }}" class="btn btn-secondary">Back to Students</a>
                </div>
            </div>
        </div>
    </div>
@endsection
