@extends('layouts.admin_master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="card-title">Books</h4>
                    <a href="{{ route('admin.books.create') }}" class="btn btn-primary">Add New Book</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="basic-datatables" class="display table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Author</th>
                                    <th>Total Copies</th>
                                    <th>Image</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($books as $book)
                                    <tr>
                                        <td>{{ $book->title }}</td>
                                        <td>{{ $book->category->name }}</td>
                                        <td>{{ $book->author }}</td>
                                        <td>{{ $book->total_copies }}</td>
                                        <td>
                                            @if ($book->image)
                                                <img src="{{ Storage::url($book->image) }}" alt="{{ $book->title }}"
                                                    style="width: 50px; height: auto;">
                                            @else
                                                No Image
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.books.show', $book->id) }}"
                                                class="btn btn-info btn-sm">View</a>
                                            <a href="{{ route('admin.books.edit', $book->id) }}"
                                                class="btn btn-warning btn-sm">Edit</a>
                                            <form action="{{ route('admin.books.destroy', $book->id) }}" method="POST"
                                                style="display:inline;">
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
