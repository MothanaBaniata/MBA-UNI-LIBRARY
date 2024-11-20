<section class="our-courses" id="courses">
    @if($books->isNotEmpty())
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
                @php
                  $availableCopies = $book->total_copies - $book->borrowed_copies;
                @endphp

                @if ($availableCopies > 0)
                  <div class="item">
                    <img src="{{ Storage::url($book->image) }}" alt="{{ $book->title }}">
                    <div class="down-content">
                      <h4>{{ $book->title }}</h4>
                      <div class="info">
                        <div class="row justify-content-center">
                          <div class="col-8 text-center">
                            <div class="main-button-red">
                              <a href="{{ route('user.book.show', $book->id) }}">Borrow Now</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                @else
                  <!-- If the book is not available, do not show anything -->
                  <!-- Simply skip this section and do not render the item -->
                @endif
              @endforeach
            </div>
          </div>
        </div>
      </div>
    @endif
</section>
