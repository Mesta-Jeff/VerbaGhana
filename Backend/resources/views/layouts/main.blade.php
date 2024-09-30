@include('includes/head')

<main class="page-wrapper">

    <!-- Start Header Top Area  -->
    @include('includes/header-area')
    <!-- End Header Top Area  -->

    <!-- Start Header Area  -->
    @include('includes/header')

    <!-- End Header Area  -->
    @include('includes/mobile-nav')

    <!-- Imroz Preloader -->
    @include('includes/preloader')




    @yield('content')




    <!-- Start Footer Area  -->
    @include('includes/footer')
    <!-- End Footer Area  -->

    <!-- Start Copy Right Area  -->
    @include('includes/foot')
</main>
<!-- All Scripts  -->

@include('includes/scripts')
