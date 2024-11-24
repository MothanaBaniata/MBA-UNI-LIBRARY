@extends('layouts.user_master')

@section('title', $book->title . ' - University Library System')

@section('content')

    <!-- Heading Section -->
    <section class="heading-page header-text" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h6>Get all details</h6>
                    <h2>{{ $book->title }} - Book Details</h2>

                    <!-- Display Success Message -->
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <!-- Book Details Section -->
    <section class="meetings-page" id="meetings">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="meeting-single-item">
                        <!-- Book Image -->
                        <div class="thumb">
                            <a href="#">
                                <img src="{{ Storage::url($book->image) }}" alt="{{ $book->title }}"
                                    class="img-fluid rounded">
                            </a>
                        </div>
                        <!-- Book Information -->
                        <div class="down-content text-center"> <!-- Add text-center to center the content -->
                            <h4>{{ $book->title }}</h4>
                            <p><strong>Author:</strong> {{ $book->author }}</p>
                            <p><strong>Category:</strong> {{ $book->category->name }}</p>

                            <!-- Available Copies -->
                            <p><strong>Available Copies:</strong>
                                @if ($book->total_copies - $book->borrowed_copies > 0)
                                    {{ $book->total_copies - $book->borrowed_copies }}
                                @else
                                    <span class="text-danger">Currently Unavailable</span>
                                @endif
                            </p>

                            <!-- Description -->
                            <p><strong>Description:</strong> {{ $book->description }}</p><br>

                            <!-- Borrow Button (if logged in and user is a student) -->
                            <!-- Borrow Button (if logged in and user is a student) -->
                            @auth
                                @if (auth()->user()->role === 'student')
                                    @if ($book->total_copies - $book->borrowed_copies > 0)
                                        <!-- If there are available copies, show the Borrow button -->
                                        <form method="POST" action="{{ route('user.borrow', $book->id) }}">
                                            @csrf
                                            <button type="submit" class="btn btn-custom">Borrow this Book</button>
                                        </form>
                                    @else
                                        <!-- If no copies are available, show the Unavailable message -->
                                        <button type="button" class="btn btn-danger" disabled>Currently Unavailable</button>
                                    @endif
                                @endif
                            @endauth

                            <!-- Login Prompt (if not logged in) -->
                            @guest
                                <p><a href="{{ route('login') }}">Log in</a> to borrow this book.</p>
                            @endguest

                        </div>
                        <!-- Back to Books List Button -->
                        <div class="col-lg-12 text-center"> <!-- Center the "Back to Books List" button -->
                            <div class="main-button-red">
                                <a href="{{ route('user.categories') }}">Back to Books List</a>
                            </div><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
