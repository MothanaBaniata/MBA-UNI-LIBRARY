<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Include top partial -->
    @include('includes.user.top')

    <!-- Page-specific styles -->
    @stack('styles')
</head>

<body>

    <!-- Include header -->
    @include('includes.user.header')
    <!-- Main content -->

    @yield('content')


    <!-- Include footer -->
    <section class="contact-us" id="contact">

        @include('includes.user.footer')

    </section>


    <!-- Include bottom scripts -->
    @include('includes.user.bottom')

    <!-- Page-specific scripts -->
    @stack('scripts')
</body>

</html>
