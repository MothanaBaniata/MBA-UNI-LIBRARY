@extends('layouts.admin_master')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">{{ $book->title }}</h4>
            </div>
            <div class="card-body">
                <h5>Category: {{ $book->category->name }}</h5>
                <p><strong>Author:</strong> {{ $book->author }}</p>
                <p><strong>Description:</strong> {{ $book->description }}</p>
                <p><strong>Total Copies:</strong> {{ $book->total_copies }}</p>
                <p><strong>Borrowed Copies:</strong> {{ $book->borrowed_copies }}</p>

                @if ($book->image)
                    <img src="{{ Storage::url($book->image) }}" alt="{{ $book->title }}" style="width: 300px; height: auto;">
                @else
                    <p>No image available</p>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
