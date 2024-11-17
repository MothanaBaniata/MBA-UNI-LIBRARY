<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.user.top')
</head>

<body>

    @include('includes.user.header')

    <!-- Heading Section: About the University Library -->
    <section class="heading-page header-text" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h6>Welcome to Our University Library</h6>
                    <h2>Your Gateway to Academic Success</h2>
                    <h6 style="text-transform: none; line-height:30px">Our library system offers a wealth of academic
                        resources to enhance your learning journey. Explore textbooks, research papers, study materials,
                        and more. Get easy access to everything you need for academic success.</h6>
                    <br>
                    <br>
                    <div class="main-button-red">
                        <a href="#services">Discover Our Services</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content Section: Services Offered by the Library -->
    <section class="meetings-page" id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <!-- Service 1: Book Borrowing -->
                        <div class="col-lg-4">
                            <div class="meeting-single-item d-flex flex-column">
                                <div class="thumb">
                                    <img src="user-assets/images/course-01.jpg" alt="Book Borrowing">
                                </div>
                                <div class="down-content">
                                    <h4>Book Borrowing</h4>
                                    <p>Find and borrow textbooks, novels, reference materials, and more. Our system
                                        makes it simple to search and borrow books from the library collection.</p>
                                    <div class="main-button-red">
                                        <a href="#">Browse the Collection</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Service 2: Research Resources -->
                        <div class="col-lg-4">
                            <div class="meeting-single-item d-flex flex-column">
                                <div class="thumb">
                                    <img src="user-assets/images/course-01.jpg" alt="Research Resources">
                                </div>
                                <div class="down-content">
                                    <h4>Research Resources</h4>
                                    <p>Access journals, research papers, and academic articles to support your academic
                                        projects. Our online database helps you find reliable research materials
                                        quickly.</p>
                                    <div class="main-button-red">
                                        <a href="#">Explore Research Tools</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Service 3: Study Areas & Spaces -->
                        <div class="col-lg-4">
                            <div class="meeting-single-item d-flex flex-column">
                                <div class="thumb">
                                    <img src="user-assets/images/course-01.jpg" alt="Study Areas">
                                </div>
                                <div class="down-content">
                                    <h4>Study Areas & Spaces</h4>
                                    <p>Our library features dedicated quiet zones, group study rooms, and collaborative
                                        spaces. Whether you’re studying solo or with a group, we have the perfect
                                        environment for you.</p>
                                    <div class="main-button-red">
                                        <a href="#">View Study Areas</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br><br>

                    <!-- Optional: Add More Info or Testimonials -->
                    <div class="col-lg-12">
                        <div class="meeting-single-item d-flex flex-column">
                            <div class="thumb">
                                <img src="user-assets/images/heading-bg.jpg" alt="Study Areas">
                            </div>
                            <div class="down-content">

                                <h3>Why Choose Our Library?</h3>
                                <p>We are committed to providing students, faculty, and staff with the best resources to
                                    ensure a thriving academic environment. Our library system is built to meet the
                                    growing needs of our university community.</p>
                                <p>Whether you're looking for academic resources, a quiet place to study, or a
                                    collaborative environment, the university library is here to support your success!
                                </p>
                                <!-- Back Button to List or Other Pages -->
                                <div class="col-lg-12 mt-5">
                                    <div class="main-button-red">
                                        <a href="library-collection.html">Browse Full Collection</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
        @include('includes.user.footer')
    </section>

    @include('includes.user.bottom')

</body>

</html>
