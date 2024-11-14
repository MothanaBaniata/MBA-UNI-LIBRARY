@extends('layouts.user_master')

@section('title', 'Home - University Library System')

@section('content')
    <div>
        <!-- ***** Main Banner Area Start ***** -->
        <section class="section main-banner" id="top" data-section="section1">
            <video autoplay muted loop id="bg-video">
                <source src="user-assets/images/course-video.mp4" type="video/mp4" />
            </video>

            <div class="video-overlay header-text">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="caption">
                                <h6>Welcome Students!</h6>
                                <h2>Your University Library Awaits</h2>
                                <p>Explore a wide range of academic resources, borrow the books you need, and enhance your
                                    learning experience. Our library system gives you easy access to textbooks, research
                                    papers, and more. Dive into our collection and find the materials that will help you
                                    succeed in your studies.</p>
                                <div class="main-button-red">
                                    <div class="scroll-to-section"><a href="#books">Browse Our Collection</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- ***** Main Banner Area End ***** -->

        <section class="services">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="owl-service-item owl-carousel">

                            <div class="item">
                                <div class="icon">
                                    <img src="user-assets/images/service-icon-01.png" alt="">
                                </div>
                                <div class="down-content">
                                    <h4>Book Collection</h4>
                                    <p>We provide a wide range of books for your academic needs.</p>
                                </div>
                            </div>

                            <div class="item">
                                <div class="icon">
                                    <img src="user-assets/images/service-icon-02.png" alt="">
                                </div>
                                <div class="down-content">
                                    <h4>Online Catalog</h4>
                                    <p>Access our library's full catalog online and find books easily.</p>
                                </div>
                            </div>

                            <div class="item">
                                <div class="icon">
                                    <img src="user-assets/images/service-icon-03.png" alt="">
                                </div>
                                <div class="down-content">
                                    <h4>Book Borrowing</h4>
                                    <p>Borrow books online and have them delivered to your campus or library.</p>
                                </div>
                            </div>

                            <div class="item">
                                <div class="icon">
                                    <img src="user-assets/images/service-icon-02.png" alt="">
                                </div>
                                <div class="down-content">
                                    <h4>Student Access</h4>
                                    <p>All students have easy access to the library's resources through their accounts.</p>
                                </div>
                            </div>

                            <div class="item">
                                <div class="icon">
                                    <img src="user-assets/images/service-icon-03.png" alt="">
                                </div>
                                <div class="down-content">
                                    <h4>Research Assistance</h4>
                                    <p>Get help with research and find relevant materials through our support services.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="upcoming-meetings" id="meetings">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-heading">
                            <h2>Upcoming Meetings</h2>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="categories">
                            <h4>Meeting Catgories</h4>
                            <ul>
                                <li><a href="#">Sed tempus enim leo</a></li>
                                <li><a href="#">Aenean molestie quis</a></li>
                                <li><a href="#">Cras et metus vestibulum</a></li>
                                <li><a href="#">Nam et condimentum</a></li>
                                <li><a href="#">Phasellus nec sapien</a></li>
                            </ul>
                            <div class="main-button-red">
                                <a href="meetings.html">All Upcoming Meetings</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="meeting-item">
                                    <div class="thumb">
                                        <div class="price">
                                            <span>$22.00</span>
                                        </div>
                                        <a href="meeting-details.html"><img src="user-assets/images/meeting-01.jpg"
                                                alt="New Lecturer Meeting"></a>
                                    </div>
                                    <div class="down-content">
                                        <div class="date">
                                            <h6>Nov <span>10</span></h6>
                                        </div>
                                        <a href="meeting-details.html">
                                            <h4>New Lecturers Meeting</h4>
                                        </a>
                                        <p>Morbi in libero blandit lectus<br>cursus ullamcorper.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="meeting-item">
                                    <div class="thumb">
                                        <div class="price">
                                            <span>$36.00</span>
                                        </div>
                                        <a href="meeting-details.html"><img src="user-assets/images/meeting-02.jpg"
                                                alt="Online Teaching"></a>
                                    </div>
                                    <div class="down-content">
                                        <div class="date">
                                            <h6>Nov <span>24</span></h6>
                                        </div>
                                        <a href="meeting-details.html">
                                            <h4>Online Teaching Techniques</h4>
                                        </a>
                                        <p>Morbi in libero blandit lectus<br>cursus ullamcorper.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="meeting-item">
                                    <div class="thumb">
                                        <div class="price">
                                            <span>$14.00</span>
                                        </div>
                                        <a href="meeting-details.html"><img src="user-assets/images/meeting-03.jpg"
                                                alt="Higher Education"></a>
                                    </div>
                                    <div class="down-content">
                                        <div class="date">
                                            <h6>Nov <span>26</span></h6>
                                        </div>
                                        <a href="meeting-details.html">
                                            <h4>Higher Education Conference</h4>
                                        </a>
                                        <p>Morbi in libero blandit lectus<br>cursus ullamcorper.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="meeting-item">
                                    <div class="thumb">
                                        <div class="price">
                                            <span>$48.00</span>
                                        </div>
                                        <a href="meeting-details.html"><img src="user-assets/images/meeting-04.jpg"
                                                alt="Student Training"></a>
                                    </div>
                                    <div class="down-content">
                                        <div class="date">
                                            <h6>Nov <span>30</span></h6>
                                        </div>
                                        <a href="meeting-details.html">
                                            <h4>Student Training Meetup</h4>
                                        </a>
                                        <p>Morbi in libero blandit lectus<br>cursus ullamcorper.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="our-facts">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-12">
                                <h2>A Few Facts About Our Library</h2>
                            </div>
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="count-area-content">
                                            <div class="count-digit">{{ $totalUsers }}</div>
                                            <div class="count-title">Registered Users</div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="count-area-content">
                                            <div class="count-digit">{{ $totalCategories }}</div>
                                            <div class="count-title">Total Categories</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="count-area-content new-students">
                                            <div class="count-digit">{{ $totalBooks }}</div>
                                            <div class="count-title">Total Books</div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="count-area-content">
                                            <div class="count-digit">{{ $totalBorrowings }}</div>
                                            <div class="count-title">Total Borrowings</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 align-self-center">
                        <div class="video">
                            <a href="https://www.youtube.com/watch?v=HndV87XpkWg" target="_blank">
                                <img src="user-assets/images/play-icon.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


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


        <section class="apply-now" id="apply">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 align-self-center">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="item">
                                    <h3>JOIN OUR LIBRARY</h3>
                                    <p>Become a member today and get access to thousands of books, journals, and resources
                                        available at our library. You can explore a wide range of topics, borrow books, and
                                        more.</p>
                                    <div class="main-button-red">
                                        <div class="scroll-to-section"><a href="#register">Register Now</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="item">
                                    <h3>EXPLORE OUR CATALOG</h3>
                                    <p>We offer a wide variety of books in different categories such as Fiction,
                                        Non-fiction, Science, Technology, and more. Browse through our catalog and start
                                        borrowing books!</p>
                                    <div class="main-button-yellow">
                                        <div class="scroll-to-section"><a href="#catalog">Browse Catalog</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="accordions is-first-expanded">
                            <article class="accordion">
                                <div class="accordion-head">
                                    <span>About Our Library</span>
                                    <span class="icon">
                                        <i class="icon fa fa-chevron-right"></i>
                                    </span>
                                </div>
                                <div class="accordion-body">
                                    <div class="content">
                                        <p>Our library offers a vast collection of books across various genres, academic
                                            fields, and interest areas. Whether you're looking for textbooks, novels, or
                                            research materials, we have something for everyone. We aim to support students,
                                            researchers, and book lovers in their learning journey.</p>
                                    </div>
                                </div>
                            </article>
                            <article class="accordion">
                                <div class="accordion-head">
                                    <span>Membership Benefits</span>
                                    <span class="icon">
                                        <i class="icon fa fa-chevron-right"></i>
                                    </span>
                                </div>
                                <div class="accordion-body">
                                    <div class="content">
                                        <p>As a member, you will enjoy a variety of benefits, such as:</p>
                                        <ul>
                                            <li>Access to thousands of books and digital resources</li>
                                            <li>Ability to borrow books for extended periods</li>
                                            <li>Get book recommendations based on your interests</li>
                                            <li>Exclusive access to library events and workshops</li>
                                        </ul>
                                    </div>
                                </div>
                            </article>
                            <article class="accordion">
                                <div class="accordion-head">
                                    <span>How to Borrow Books</span>
                                    <span class="icon">
                                        <i class="icon fa fa-chevron-right"></i>
                                    </span>
                                </div>
                                <div class="accordion-body">
                                    <div class="content">
                                        <p>Borrowing books is simple! Once you're a member, you can visit the library or use
                                            our online system to search for books and reserve them. You can borrow books for
                                            up to 14 days and extend the
                                            borrowing period if necessary.</p>
                                    </div>
                                </div>
                            </article>
                            <article class="accordion last-accordion">
                                <div class="accordion-head">
                                    <span>Join Us Today!</span>
                                    <span class="icon">
                                        <i class="icon fa fa-chevron-right"></i>
                                    </span>
                                </div>
                                <div class="accordion-body">
                                    <div class="content">
                                        <p>Don't miss out on the opportunity to expand your knowledge. Become a part of our
                                            library community today!</p>
                                        <p>Register online or visit us to sign up and get access to our full range of
                                            services.</p>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

@endsection

@section('scripts')
    <script>
        // Example of page-specific script
        console.log("Home page loaded");
    </script>
@endsection
