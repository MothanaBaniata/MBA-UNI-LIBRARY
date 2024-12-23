<div class="sidebar sidebar-style-2" data-background-color="light">
    <div class="sidebar-logo">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="dark">
            <a href="" class="logo">
                {{-- <img src="admin-assets/img/kaiadmin/logo_light.svg" alt="navbar brand" class="navbar-brand"
                    height="20" /> --}}
                <h1>Library</h1>
            </a>
            <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                    <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                    <i class="gg-menu-left"></i>
                </button>
            </div>
            <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
            </button>
        </div>
        <!-- End Logo Header -->
    </div>
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-secondary">
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#dashboard" class="collapsed" aria-expanded="false">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="dashboard">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route('admin.dashboard') }}">
                                    <span class="sub-item">Dashboard Overview</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#students" class="collapsed" aria-expanded="false">
                        <i class="fas fa-user-graduate"></i>
                        <p>Students</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="students">
                        <ul class="nav nav-collapse">
                            <!-- Manage Students (active) -->
                            <li><a href="{{ route('admin.users.index') }}"><span class="sub-item">Manage Active Students</span></a></li>

                            <!-- Soft Deleted Students -->
                            <li><a href="{{ route('admin.users.deleted') }}"><span class="sub-item">Manage Deleted Students</span></a></li>

                            <!-- Add New Student -->
                            <li><a href="{{ route('admin.users.create') }}"><span class="sub-item">Add New Student</span></a></li>
                        </ul>
                    </div>
                </li>


                @if (auth()->user()->role === 'superadmin')
                    <!-- Only show for superadmins -->
                    <li class="nav-item">
                        <a data-bs-toggle="collapse" href="#admins" class="collapsed" aria-expanded="false">
                            <i class="fas fa-user-shield"></i>
                            <p>Admins</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="admins">
                            <ul class="nav nav-collapse">
                                <!-- Manage Admins -->
                                <li><a href="{{ route('admin.manage.admins') }}"><span class="sub-item">Manage
                                            Admins</span></a></li>

                                <!-- Add New Admin -->
                                <li><a href="{{ route('admin.manage.admins.create') }}"><span class="sub-item">Add New
                                            Admin</span></a></li>
                            </ul>
                        </div>
                    </li>
                @endif

                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#categories" class="collapsed" aria-expanded="false">
                        <i class="fas fa-cogs"></i> <!-- Change the icon to something related to categories -->
                        <p>Categories</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="categories">
                        <ul class="nav nav-collapse">
                            <li><a href="{{ route('admin.categories.index') }}"><span class="sub-item">Manage
                                        Categories</span></a></li>
                            <li><a href="{{ route('admin.categories.create') }}"><span class="sub-item">Add New
                                        Category</span></a></li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#books" class="collapsed" aria-expanded="false">
                        <i class="fas fa-book"></i>
                        <p>Books</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="books">
                        <ul class="nav nav-collapse">
                            <!-- Link to manage books (index) -->
                            <li>
                                <a href="{{ route('admin.books.index') }}">
                                    <span class="sub-item">Manage Books</span>
                                </a>
                            </li>
                            <!-- Link to add a new book -->
                            <li>
                                <a href="{{ route('admin.books.create') }}">
                                    <span class="sub-item">Add New Book</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#borrowings" class="collapsed" aria-expanded="false">
                        <i class="fas fa-exchange-alt"></i>
                        <p>Borrowings</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="borrowings">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route('admin.borrowings.index') }}">
                                    <span class="sub-item">Manage Borrowings</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.borrowings.create') }}">
                                    <span class="sub-item">Add New Borrowing</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#events" class="collapsed" aria-expanded="false">
                        <i class="fas fa-calendar-alt"></i>
                        <p>Events</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="events">
                        <ul class="nav nav-collapse">
                            <!-- Link to manage events (index) -->
                            <li>
                                <a href="{{ route('admin.events.index') }}">
                                    <span class="sub-item">Manage Events</span>
                                </a>
                            </li>
                            <!-- Link to add a new event -->
                            <li>
                                <a href="{{ route('admin.events.create') }}">
                                    <span class="sub-item">Add New Event</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>


                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#contacts" class="collapsed" aria-expanded="false">
                        <i class="fas fa-envelope"></i>
                        <p>Contact Us</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="contacts">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route('admin.contacts.index') }}">
                                    <span class="sub-item">Manage Messages</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a href="{{ url('/') }}">
                        <i class="fas fa-home"></i>
                        <p>Back to Landing Page</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.profile') }}">
                        <i class="fas fa-user"></i>
                        <p>My Profile</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a>
                        <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                            @csrf
                            <button type="submit" class="btn btn-link">
                                <i class="fas fa-sign-out-alt"></i>
                                <p>Logout</p>
                            </button>
                        </form>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar -->
