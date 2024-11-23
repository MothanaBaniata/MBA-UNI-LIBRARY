<!-- Footer Section -->
<footer class="footer bg-dark text-white pt-5 pb-4">
    <div class="container">
        <div class="row">
            <!-- Left Column: University Library -->
            <div class="col-12 col-md-4 mb-4 mb-md-0">
                <h5 class="text-uppercase font-weight-bold mb-3" style="font-size: 1.5rem; letter-spacing: 2px;">University Library</h5>
                <p class="text-light" style="font-size: 1.1rem; line-height: 1.8;">Explore a vast collection of books, research materials, and more to help you succeed academically. Join us today to start borrowing!</p>
            </div>

            <!-- Middle Column: Quick Links -->
            <div class="col-12 col-md-4 mb-4 mb-md-0">
                <h5 class="text-uppercase font-weight-bold mb-3" style="font-size: 1.5rem; letter-spacing: 2px;">Quick Links</h5>
                <ul class="list-unstyled">
                    <li><a href="{{ route('user.categories') }}" class="text-white py-1 link-hover">Categories</a></li>
                    <li><a href="{{ url('about') }}" class="text-white py-1 link-hover">About Us</a></li>
                    <li><a href="{{ route('contact.show') }}" class="text-white py-1 link-hover">Contact Us</a></li>
                    <li><a href="#apply" class="text-white py-1 link-hover">FAQs</a></li>
                </ul>
            </div>

            <!-- Right Column: Get Started Today + Social Links -->
            <div class="col-12 col-md-4 text-center text-md-end">
                <h5 class="text-uppercase font-weight-bold mb-3" style="font-size: 1.5rem; letter-spacing: 2px;">Get Started Today</h5>
                <p class="text-light mb-3" style="font-size: 1.1rem; line-height: 1.8;">Sign up now and unlock the resources available to you!</p>
                <a href="{{ route('register') }}" class="btn btn-custom-red btn-lg mb-3">Register Now</a>

                <ul class="list-inline mb-0">
                    <li class="list-inline-item me-3">
                        <a href="#" class="text-white social-icon" target="_blank">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </li>
                    <li class="list-inline-item me-3">
                        <a href="#" class="text-white social-icon" target="_blank">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                    <li class="list-inline-item me-3">
                        <a href="#" class="text-white social-icon" target="_blank">
                            <i class="fa fa-linkedin"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <hr class="border-light my-4">

        <!-- Copyright -->
        <div class="row align-items-center">
            <div class="col-12 text-center mb-3 mb-md-0">
                <span class="mb-0">&copy; 2024 University Library Management System. All Rights Reserved.</span>
            </div>
        </div>
    </div>

    <!-- Scroll to top button -->
    <button id="scrollUpBtn" class="btn btn-primary" title="Go to top">
        <img src="{{ asset('user-assets/images/up-arrow-outbox-svgrepo-com.svg') }}" alt="Up Arrow" width="24" height="24">
    </button>
</footer>
