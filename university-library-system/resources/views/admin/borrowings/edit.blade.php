@extends('layouts.admin_master')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Edit Borrowing</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.borrowings.update', $borrowing->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="user_id">User</label>
                        <select name="user_id" id="user_id" class="form-control">
                            @foreach($users as $user)
                                <option value="{{ $user->id }}" {{ $user->id == $borrowing->user_id ? 'selected' : '' }}>{{ $user->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="book_id">Book</label>
                        <select name="book_id" id="book_id" class="form-control">
                            @foreach($books as $book)
                                <option value="{{ $book->id }}" {{ $book->id == $borrowing->book_id ? 'selected' : '' }}>{{ $book->title }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="borrowed_at">Borrowed At</label>
                        <input type="date" name="borrowed_at" id="borrowed_at" class="form-control" value="{{ $borrowing->borrowed_at }}" required>
                    </div>

                    <div class="form-group">
                        <label for="due_date">Due Date</label>
                        <input type="date" name="due_date" id="due_date" class="form-control" value="{{ $borrowing->due_date }}" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Update Borrowing</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
