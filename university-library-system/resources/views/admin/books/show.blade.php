@extends('layouts.admin_master')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">{{ $book->title }}</h4>
            </div>
            <div class="card-body d-flex align-items-start">
                <!-- Text Content Section (Left) -->
                <div class="text-content" style="flex: 2; padding-right: 30px;">
                    <h5>Category: {{ $book->category->name }}</h5>
                    <p><strong>Author:</strong> {{ $book->author }}</p>
                    <p><strong>Description:</strong> {{ $book->description }}</p>
                    <p><strong>Total Copies:</strong> {{ $book->total_copies }}</p>
                    <p><strong>Borrowed Copies:</strong> {{ $book->borrowed_copies }}</p>

                    <!-- Back to Books button -->
                    <div class="mt-3">
                        <a href="{{ route('admin.books.index') }}" class="btn btn-primary">Back to Books</a>
                    </div>
                </div>

                <!-- Image Content Section (Right) -->
                <div class="image-content" style="flex: 1; max-width: 250px;">
                    @if ($book->image)
                        <img src="{{ Storage::url($book->image) }}" alt="{{ $book->title }}" class="img-fluid" style="width: 100%; height: auto;">
                    @else
                        <p>No image available</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
