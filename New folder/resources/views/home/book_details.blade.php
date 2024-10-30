<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    @include('home.head')
</head>

<body>
    @include('home.header')

    <div class="currently-market">
        <div class="container">
            <div class="row">
                <div class="col-lg-6" style="margin-top: 100px">
                    <div class="filters">
                        <ul>
                            <li data-filter="*" class="active">All Books</li>
                            @foreach ($category as $cat)
                                <li>
                                    <a href="{{ url('cat_search', $cat->id) }}">{{ $cat->cat_title }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <form action="{{ url('search') }}" method="get">
                    @csrf
                    <div class="row" style="margin: 30px">
                        <div class="col-md-8">
                            <input class="form-control" type="search" name="search"
                                placeholder="Search for Book title or Author name">
                        </div>
                        <div class="col-md-4">
                            <input class="btn btn-primary" type="submit" value="Search">
                        </div>
                    </div>
                </form>

                <div class="col-lg-12">
                    <div class="row grid">
                        @foreach ($data as $book)
                            <div class="col-lg-6 currently-market-item all msc">
                                <div class="item">
                                    <div class="left-image">
                                        <img src="{{ asset('book/' . $book->book_img) }}" alt=""
                                            style="border-radius: 20px; min-width: 195px;">
                                    </div>
                                    <div class="right-content">
                                        <h4>{{ $book->title }}</h4>
                                        <span class="author">
                                            <img src="{{ asset('author/' . $book->author_img) }}" alt=""
                                                style="max-width: 50px; border-radius: 50%;">
                                            <h6>{{ $book->author_name }}</h6>
                                        </span>
                                        <div class="line-dec"></div>
                                        <span class="bid">Current
                                            Available<br><strong>{{ $book->quantity }}</strong><br></span>
                                        <div class="text-button">
                                            <a href="{{ url('book_details', $book->id) }}">View Item Details</a>
                                        </div>
                                        <div>
                                            <a class="btn btn-primary" href="{{ url('borrow_books', $book->id) }}">Apply
                                                to Borrow</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>


    @include('home.footer')


    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>

    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/popup.js"></script>
    <script src="assets/js/custom.js"></script>
</body>

</html>
