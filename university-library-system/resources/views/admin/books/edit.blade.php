@extends('layouts.admin_master')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Edit Book</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.books.update', $book->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title" class="form-control" value="{{ $book->title }}" required>
                    </div>

                    <div class="form-group">
                        <label for="category_id">Category</label>
                        <select name="category_id" id="category_id" class="form-control" required>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}" {{ $category->id == $book->category_id ? 'selected' : '' }}>{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="author">Author</label>
                        <input type="text" name="author" id="author" class="form-control" value="{{ $book->author }}" required>
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" class="form-control">{{ $book->description }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="total_copies">Total Copies</label>
                        <input type="number" name="total_copies" id="total_copies" class="form-control" value="{{ $book->total_copies }}" required>
                    </div>

                    <div class="form-group">
                        <label for="image">Book Image</label>
                        @if ($book->image)
                            <img src="{{ Storage::url($book->image) }}" alt="{{ $book->title }}" style="width: 100px; height: auto;">
                        @endif
                        <input type="file" name="image" id="image" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-warning">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
