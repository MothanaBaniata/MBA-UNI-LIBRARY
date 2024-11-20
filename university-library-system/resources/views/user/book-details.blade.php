@extends('layouts.user_master')

@section('title', $book->title . ' - University Library System')

@section('content')

    <section class="heading-page header-text" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h6>Here are our resources</h6>
                    <h2>{{ $book->title }} - Book Details</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="book-details-page" id="books">
        <div class="container">
            <div class="row">
                <!-- Book Image and Information -->
                <div class="col-lg-12">
                    <div class="row">
                        <!-- Book Image -->
                        <div class="col-lg-6">
                            <img src="{{ Storage::url($book->image) }}" alt="{{ $book->title }}" class="img-fluid rounded">
                        </div>

                        <!-- Book Info -->
                        <div class="col-lg-6">
                            <h4>{{ $book->title }}</h4>
                            <p><strong>Author:</strong> {{ $book->author }}</p>
                            <p><strong>Category:</strong> {{ $book->category->name }}</p>
                            <p><strong>Available Copies:</strong>
                                @if ($book->total_copies - $book->borrowed_copies > 0)
                                    {{ $book->total_copies - $book->borrowed_copies }}
                                @else
                                    <span class="text-danger">Currently Unavailable</span>
                                @endif
                            </p>

                            <p><strong>Description:</strong> {{ $book->description }}</p>

                            <!-- If user is logged in, show borrow button (optional) -->
                            @auth
                                {{-- <form method="POST" action="{{ route('user.borrow', $book->id) }}">
                                @csrf
                                <button type="submit" class="btn btn-primary">Borrow this Book</button>
                            </form> --}}
                            @endauth

                            <!-- If user is not logged in, show login suggestion -->
                            @guest
                                <p><a href="{{ route('login') }}">Log in</a> to borrow this book.</p>
                            @endguest
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
