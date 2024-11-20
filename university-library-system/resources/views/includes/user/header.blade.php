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
                        Library
                    </a>
                    <!-- ***** Logo End ***** -->

                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        {{-- <li class="has-sub">
                            <a href="javascript:void(0)">Categories</a>
                            <ul class="sub-menu">
                                <li><a href="{{ route('user.categories') }}">Categories</a></li>
                                <li><a href="#">Single page</a></li>
                            </ul>
                        </li> --}}
                        <li><a href="{{ route('user.categories') }}">Categories</a></li>
                        <li><a href="{{ url('about') }}">About</a></li>
                        <li class=""><a href="{{ route('contact.show') }}">Contact Us</a></li>

                        <!-- ***** Authentication Section Start ***** -->
                        @if (Route::has('login'))
                            @auth
                                <!-- User is authenticated -->
                                <li class="dropdown">
                                    <a id="navbarDropdown" class="dropdown-toggle" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        {{ Auth::user()->name }}
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <!-- Conditional Menu Items -->
                                        @if (auth()->user()->role === 'admin' || auth()->user()->role === 'superadmin')
                                            <!-- Admin Dashboard Link -->
                                            <a class="dropdown-item" href="{{ url('/admin') }}">
                                                Admin Dashboard
                                            </a>
                                        @else
                                            <!-- Regular User Profile Link -->
                                            <a class="dropdown-item" href="{{ route('profile') }}">
                                                My Profile
                                            </a>
                                        @endif
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
                                    <a class="cta-button" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="cta-button" href="{{ route('register') }}">{{ __('Register') }}</a>
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
