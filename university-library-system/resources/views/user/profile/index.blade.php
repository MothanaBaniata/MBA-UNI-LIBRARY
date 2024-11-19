@extends('layouts.user_master')

@section('title', 'My Profile - University Library System')

@section('content')

    <section class="heading-page header-text" id="top">
        <div class="container">
            <h2 class="text-center mb-4">My Profile</h2>

            <!-- Nav for Bootstrap Tabs -->
            <ul class="nav nav-tabs" id="profileTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="account-info-tab" data-bs-toggle="tab" href="#account-info" role="tab"
                        aria-controls="account-info" aria-selected="true">Account Info</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="borrowings-tab" data-bs-toggle="tab" href="#borrowings" role="tab"
                        aria-controls="borrowings" aria-selected="false">Borrowings</a>
                </li>
            </ul>

            <!-- Tab Content -->
            <div class="tab-content" id="profileTabsContent">
                <!-- Account Info Section -->
                <div class="tab-pane fade show active" id="account-info" role="tabpanel" aria-labelledby="account-info-tab">
                    <div class="bg-white p-4 shadow-sm rounded">
                        <h3 class="mb-3">Account Information</h3>
                        <p><strong>Name:</strong> {{ $user->name }}</p>
                        <p><strong>Email:</strong> {{ $user->email }}</p>

                        <!-- Edit Profile Button -->
                        <a href="{{ route('profile.edit') }}" class="btn btn-primary mt-3">Edit Profile</a>
                    </div>
                </div>

                <!-- Borrowings Section -->
                <div class="tab-pane fade" id="borrowings" role="tabpanel" aria-labelledby="borrowings-tab">
                    <div class="bg-white p-4 shadow-sm rounded">
                        <h3 class="mb-3">Borrowed Books</h3>
                        @if ($borrowings->count())
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Book Title</th>
                                        <th>Borrowed Date</th>
                                        <th>Due Date</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($borrowings as $borrowing)
                                        <tr>
                                            <td>{{ $borrowing->book->title }}</td>
                                            <td>{{ $borrowing->borrowed_at->format('Y-m-d') }}</td>
                                            <td>{{ $borrowing->due_date->format('Y-m-d') }}</td>
                                            <td>
                                                @if ($borrowing->returned_at)
                                                    <span class="badge bg-success">Returned</span>
                                                @else
                                                    <span class="badge bg-warning">Not Returned</span>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                            <p class="text-muted">You have no borrowed books at the moment.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
