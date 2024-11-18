<section class="our-courses" id="courses">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2>Our Popular Books</h2>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="owl-courses-item owl-carousel">
                    @foreach ($books as $book)
                        <div class="item">
                            <img src="{{ Storage::url($book->image) }}" alt="{{ $book->title }}">
                            <div class="down-content">
                                <h4>{{ $book->title }}</h4>
                                <p><strong>Author:</strong> {{ $book->author }}</p>
                                <p>
                                    <strong>Description:</strong>
                                    {{ Str::words($book->description, 5, '...') }}
                                </p>
                                <div class="info">
                                    <div class="row">
                                        <div class="col-12">
                                            <!-- Borrow Now button -->
                                            <a href="" class="btn btn-primary">Borrow Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
