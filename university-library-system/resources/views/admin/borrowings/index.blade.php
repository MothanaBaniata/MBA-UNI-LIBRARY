@extends('layouts.admin_master')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="card-title">Borrowings</h4>
                <a href="{{ route('admin.borrowings.create') }}" class="btn btn-primary">Add New Borrowing</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="display table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>User</th>
                                <th>Book</th>
                                <th>Borrowed At</th>
                                <th>Due Date</th>
                                <th>Returned At</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($borrowings as $borrowing)
                                <tr>
                                    <td>{{ $borrowing->user->name }}</td>
                                    <td>{{ $borrowing->book->title }}</td>
                                    <td>{{ $borrowing->borrowed_at }}</td>
                                    <td>{{ $borrowing->due_date }}</td>
                                    <td>{{ $borrowing->returned_at ?? 'Not Returned' }}</td>
                                    <td>
                                        <a href="{{ route('admin.borrowings.show', $borrowing->id) }}" class="btn btn-info btn-sm">View</a>
                                        <a href="{{ route('admin.borrowings.edit', $borrowing->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{ route('admin.borrowings.destroy', $borrowing->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
