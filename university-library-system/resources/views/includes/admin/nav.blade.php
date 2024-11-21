<!-- resources/views/includes/admin/nav.blade.php -->
<div class="main-header">
    <div class="main-header-logo">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="dark">
            <a href="" class="logo">
                <img src="assets/img/kaiadmin/logo_light.svg" alt="navbar brand" class="navbar-brand" height="20" />
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
    <!-- Navbar Header -->
    <nav class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom">
        <div class="container-fluid">
            <nav class="navbar navbar-header-left navbar-expand-lg navbar-form nav-search p-0 d-none d-lg-flex">
                <form action="{{ route('admin.search') }}" method="GET" class="w-100">
                    <div class="input-group" style="width: 300px;"> <!-- Increased width here -->
                        <div class="input-group-prepend">
                            <button type="submit" class="btn btn-search pe-1">
                                <i class="fa fa-search search-icon"></i>
                            </button>
                        </div>
                        <input type="text" name="query" placeholder="Search (users, books, etc.)" class="form-control" value="{{ request()->input('query') }}" />
                    </div>

                    <!-- Display validation error if query is too short -->
                    @if($errors->has('query'))
                        <div class="text-danger mt-1">
                            {{ $errors->first('query') }}
                        </div>
                    @endif
                </form>
            </nav>
        </div>
    </nav>
    <!-- End Navbar -->
</div>
