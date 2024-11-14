<!-- Sub Header -->
<div class="sub-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-sm-8">
                <div class="left-content">
                    <p><em>Welcome to the Library.</em></p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="right-icons">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="{{ url('/') }}" class="logo">
                        University Library
                    </a>
                    <!-- ***** Logo End ***** -->

                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="has-sub">
                            <a href="javascript:void(0)">Categories</a>
                            <ul class="sub-menu">
                                <li><a href="#">Categories</a></li>
                                <li><a href="#">Single page</a></li>
                            </ul>
                        </li>
                        <li class="scroll-to-section"><a href="#books">Books</a></li>
                        <li><a href="#">About</a></li>
                        <li class="scroll-to-section"><a href="#apply">Apply Now</a></li>
                        <li class=""><a href="{{ route('contact.show') }}">Contact Us</a></li>



                        <!-- ***** Authentication Section Start ***** -->
                        @if (Route::has('login'))
                            @auth
                                <!-- User is authenticated -->
                                <li class="scroll-to-section dropdown">
                                    <a id="navbarDropdown" class="scroll-to-section dropdown-toggle" href="#"
                                        role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        {{ Auth::user()->name }}
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <!-- My Profile Link -->
                                        <a class="dropdown-item" href="{{ route('logout') }}">
                                            My Profile
                                        </a>
                                        <!-- Logout Link -->
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @else
                                <!-- User is not authenticated -->
                                <li class="nav-item">
                                    <a class="scroll-to-section" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="scroll-to-section"
                                            href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @endauth
                        @endif
                        <!-- ***** Authentication Section End ***** -->
                    </ul>
                    <!-- ***** Menu End ***** -->

                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->
