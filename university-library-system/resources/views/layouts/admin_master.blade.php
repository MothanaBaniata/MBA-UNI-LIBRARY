<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Include top partial -->
    @include('includes.admin.top')

    <!-- Page-specific styles -->
    @stack('styles')
</head>

<body>
    <div class="wrapper">
        <!-- Include sidebar -->
        @include('includes.admin.sidebar')

        <div class="main-panel">
            <!-- Include navigation -->
            @include('includes.admin.nav')

            <div class="container">
                <div class="page-inner">
                    <!-- Main content -->
                    <div class="content">
                        @yield('content')
                    </div>
                </div>
            </div>

            <!-- Include footer -->
            @include('includes.admin.footer')
        </div>
    </div>

    <!-- Include bottom scripts -->
    @include('includes.admin.bottom')

    <!-- Page-specific scripts -->
    @stack('scripts')
</body>

</html>
