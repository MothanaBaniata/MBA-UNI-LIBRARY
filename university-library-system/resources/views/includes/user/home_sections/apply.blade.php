<section class="apply-now" id="apply">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-center">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="item">
                            <h3>JOIN OUR LIBRARY</h3>
                            @auth
                                <!-- If the user is logged in -->
                                <p>Welcome back! Manage your account or explore your borrowing history.</p>
                                <div class="main-button-red">
                                    <div class=""><a href="{{ route('profile') }}">Go to My Profile</a></div>
                                </div>
                            @else
                                <!-- If the user is not logged in -->
                                <p>Interested in accessing thousands of books, journals, and educational resources? Become a
                                    member today and start exploring!</p>
                                <div class="main-button-red">
                                    <div class=""><a href="{{ route('register') }}">Register Now</a></div>
                                </div>
                            @endauth
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="item">
                            <h3>EXPLORE OUR CATALOG</h3>
                            <p>We have a diverse catalog of books in categories such as Fiction, Non-fiction, Science,
                                Technology, and more. Start browsing now!</p>
                            <div class="main-button-yellow">
                                <div class=""><a href="{{ route('user.categories') }}">Browse Catalog</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="accordions is-first-expanded">
                    <!-- Accordion Item 1: FAQ-style -->
                    <article class="accordion">
                        <div class="accordion-head">
                            <span>What is the University Library?</span>
                            <span class="icon">
                                <i class="icon fa fa-chevron-right"></i>
                            </span>
                        </div>
                        <div class="accordion-body">
                            <div class="content">
                                <p>The University Library provides access to a wide range of resources including books
                                    and journals to support academic and personal growth.</p>
                            </div>
                        </div>
                    </article>
                    <!-- Accordion Item 2: FAQ-style -->
                    <article class="accordion">
                        <div class="accordion-head">
                            <span>How do I become a member of the library?</span>
                            <span class="icon">
                                <i class="icon fa fa-chevron-right"></i>
                            </span>
                        </div>
                        <div class="accordion-body">
                            <div class="content">
                                <p>Simply register online through our website or visit the library in person to fill out
                                    a membership form. Once you're signed up, you'll have access to all library
                                    resources.</p>
                            </div>
                        </div>
                    </article>
                    <!-- Accordion Item 3: FAQ-style -->
                    <article class="accordion">
                        <div class="accordion-head">
                            <span>What benefits do I get as a library member?</span>
                            <span class="icon">
                                <i class="icon fa fa-chevron-right"></i>
                            </span>
                        </div>
                        <div class="accordion-body">
                            <div class="content">
                                <p>As a member, you get:</p>
                                <ul>
                                    <li>Access to thousands of books and digital resources</li>
                                    <li>Extended borrowing periods for books</li>
                                </ul>
                            </div>
                        </div>
                    </article>
                    <!-- Accordion Item 4: FAQ-style -->
                    <article class="accordion last-accordion">
                        <div class="accordion-head">
                            <span>How do I borrow books from the library?</span>
                            <span class="icon">
                                <i class="icon fa fa-chevron-right"></i>
                            </span>
                        </div>
                        <div class="accordion-body">
                            <div class="content">
                                <p>To borrow books, simply log in to your library account online or visit the library in
                                    person. Search for your preferred books, select them, and reserve or borrow them.
                                    You can keep the books for up to 14 days.</p>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
</section>
