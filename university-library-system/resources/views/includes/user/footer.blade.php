<!-- Footer Section -->
<br>
<footer class="footer bg-dark text-white pt-5 pb-4">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4 mb-4 mb-md-0">
                <h5 class="text-uppercase font-weight-bold">University Library</h5><br>
                <span class="mb-3">Explore a vast collection of books, research materials, and more to help you succeed
                    academically. Join us today to start borrowing!</span>
            </div>

            <div class="col-12 col-md-4 mb-4 mb-md-0">
                <h5 class="text-uppercase font-weight-bold">Quick Links</h5><br>
                <ul class="list-unstyled">
                    <li><a href="{{ route('user.categories') }}" class="text-white py-1">Categories</a></li>
                    <li><a href="{{ url('about') }}" class="text-white py-1">About Us</a></li>
                    <li><a href="{{ route('contact.show') }}" class="text-white py-1">Contact Us</a></li>
                    <li><a href="#apply-now" class="text-white py-1">FAQs</a></li>
                </ul>
            </div>

            <div class="col-12 col-md-4 text-center text-md-end">
                <h5 class="text-uppercase font-weight-bold">Get Started Today</h5><br>
                <p class="mb-3">Sign up now and unlock the resources available to you!</p>
                <a href="{{ route('register') }}" class="btn btn-primary btn-lg mb-3">Register Now</a>

                <ul class="list-inline mb-0">
                    <li class="list-inline-item me-3">
                        <a href="#" class="text-white" target="_blank">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </li>
                    <li class="list-inline-item me-3">
                        <a href="#" class="text-white" target="_blank">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                    <li class="list-inline-item me-3">
                        <a href="#" class="text-white" target="_blank">
                            <i class="fa fa-linkedin"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <hr class="border-light my-4">

        <div class="row align-items-center">
            <!-- Left Column: Copyright Notice -->
            <div class="col-12 text-center mb-3 mb-md-0">
                <span class="mb-0">&copy; 2024 University Library Management System. All Rights Reserved.</span>
            </div>
        </div>
    </div>
    <button id="scrollUpBtn" class="btn btn-primary" title="Go to top">
        <img src="{{ asset('user-assets/images/up-arrow-outbox-svgrepo-com.svg') }}" alt="Up Arrow" width="24"
            height="24">
    </button>
</footer>
