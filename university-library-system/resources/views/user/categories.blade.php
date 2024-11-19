@extends('layouts.user_master')

@section('title', 'Books Collection - University Library System')

@section('content')

    <section class="heading-page header-text" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h6>Here are our resources</h6>
                    <h2>Books Collection</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="meetings-page" id="meetings">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="filters">
                        <ul>
                            <!-- All categories button -->
                            <li data-filter="*" class="active">All Categories</li>

                            <!-- Display categories dynamically -->
                            @foreach ($categories as $category)
                                <li data-filter=".{{ strtolower($category->name) }}">{{ $category->name }}</li>
                            @endforeach

                            <!-- Dropdown to select a category -->

                            <form method="GET" action="{{ route('user.categories') }}">
                                <select class="custom-select" id="categoryDropdown" name="category"
                                    onchange="this.form.submit()">
                                    <option value="">Select Category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"
                                            {{ request('category') == $category->id ? 'selected' : '' }}>
                                            {{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </form>

                            <!-- Search field for books -->
                            <li>
                                <form method="GET" action="{{ route('user.categories') }}">
                                    <input type="text" class="form-control" name="search" placeholder="Search Books"
                                        value="{{ request('search') }}">
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Display books dynamically -->
                <div class="col-lg-12">
                    <div class="row grid">
                        @foreach ($books as $book)
                            <div class="col-lg-4 templatemo-item-col all {{ strtolower($book->category->name) }}">
                                <div class="meeting-item">
                                    <div class="thumb">
                                        <div class="price">
                                            <span>{{ $book->category->name }}</span>
                                        </div>
                                        <a href="{{ route('user.book.show', $book->id) }}">
                                            <img src="{{ asset('storage/' . $book->image) }}" alt="{{ $book->title }}">
                                        </a>
                                    </div>
                                    <div class="down-content">
                                        <div class="date">
                                            <h6>Available <span>{{ $book->total_copies - $book->borrowed_copies }}</span>
                                            </h6>
                                        </div>
                                        <a href="{{ route('user.book.show', $book->id) }}">
                                            <h4>{{ $book->title }}</h4>
                                        </a>
                                        <p>{{ $book->description }}</p>
                                        <div class="main-button-red">
                                            <div class="">
                                                <a href="{{ route('user.book.show', $book->id) }}">More details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Custom Pagination -->
                <div class="col-lg-12">
                    <div class="pagination">
                        <ul>
                            <!-- Previous Button -->
                            @if ($books->onFirstPage())
                                <li class="disabled"><a href="#">«</a></li>
                            @else
                                <li><a href="{{ $books->previousPageUrl() }}">«</a></li>
                            @endif

                            <!-- Page Number Links -->
                            @foreach ($books->getUrlRange(1, $books->lastPage()) as $page => $url)
                                <li class="{{ $page == $books->currentPage() ? 'active' : '' }}">
                                    <a href="{{ $url }}">{{ $page }}</a>
                                </li>
                            @endforeach

                            <!-- Next Button -->
                            @if ($books->hasMorePages())
                                <li><a href="{{ $books->nextPageUrl() }}"><i class="fa fa-angle-right"></i></a></li>
                            @else
                                <li class="disabled"><a href="#"><i class="fa fa-angle-right"></i></a></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('scripts')
    <script>
        function filterBooksByCategory(selectElement) {
            var categoryId = selectElement.value;
            var searchTerm = document.querySelector('input[name="search"]').value;

            var url = new URL(window.location.href);

            if (categoryId) {
                url.searchParams.set('category', categoryId);
            } else {
                url.searchParams.delete('category');
            }

            if (searchTerm) {
                url.searchParams.set('search', searchTerm);
            } else {
                url.searchParams.delete('search');
            }

            window.location.href = url.toString();
        }
    </script>
@endsection
