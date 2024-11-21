@extends('layouts.admin_master')

@section('content')
    <div class="container mt-5">
        <h3 class="fw-bold mb-4">Search Results for "{{ $query }}"</h3>

        @if($users->isEmpty() && $books->isEmpty() && $categories->isEmpty() && $borrowings->isEmpty() && $events->isEmpty())
            <p>No results found.</p>
        @else
            @if($users->isNotEmpty())
                <h4>Users</h4>
                <ul>
                    @foreach($users as $user)
                        <li><a href="{{ route('admin.users.show', $user->id) }}">{{ $user->name }}</a></li>
                    @endforeach
                </ul>
            @endif

            @if($books->isNotEmpty())
                <h4>Books</h4>
                <ul>
                    @foreach($books as $book)
                        <li><a href="{{ route('admin.books.show', $book->id) }}">{{ $book->title }}</a></li>
                    @endforeach
                </ul>
            @endif

            @if($categories->isNotEmpty())
                <h4>Categories</h4>
                <ul>
                    @foreach($categories as $category)
                        <li><a href="{{ route('admin.categories.show', $category->id) }}">{{ $category->name }}</a></li>
                    @endforeach
                </ul>
            @endif

            @if($borrowings->isNotEmpty())
                <h4>Borrowings</h4>
                <ul>
                    @foreach($borrowings as $borrowing)
                        <li><a href="{{ route('admin.borrowings.show', $borrowing->id) }}">{{ $borrowing->id }}</a></li>
                    @endforeach
                </ul>
            @endif

            @if($events->isNotEmpty())
                <h4>Events</h4>
                <ul>
                    @foreach($events as $event)
                        <li><a href="{{ route('admin.events.show', $event->id) }}">{{ $event->title }}</a></li>
                    @endforeach
                </ul>
            @endif
        @endif
    </div>
@endsection
