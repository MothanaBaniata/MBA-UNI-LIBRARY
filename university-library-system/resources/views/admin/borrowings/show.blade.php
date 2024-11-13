@extends('layouts.admin_master')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Borrowing Details</h4>
            </div>
            <div class="card-body">
                <p><strong>User:</strong> {{ $borrowing->user->name }}</p>
                <p><strong>Book:</strong> {{ $borrowing->book->title }}</p>
                <p><strong>Borrowed At:</strong> {{ $borrowing->borrowed_at }}</p>
                <p><strong>Due Date:</strong> {{ $borrowing->due_date }}</p>
                <p><strong>Returned At:</strong> {{ $borrowing->returned_at ?? 'Not Returned' }}</p>
            </div>
        </div>
    </div>
</div>
@endsection
