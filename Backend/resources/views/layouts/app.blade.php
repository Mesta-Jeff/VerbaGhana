@include('includes/chat/head')
<main class="page-wrapper rbt-dashboard-page">
    <div class="rbt-panel-wrapper">

        @include('includes/chat/header')

        <!-- Imroz Preloader -->
        <div class="preloader">
            <div class='loader'>
                <div class='circle'></div>
                <div class='circle'></div>
                <div class='circle'></div>
                <div class='circle'></div>
                <div class='circle'></div>
            </div>
        </div>

        <!-- Start Left panel -->
        {{-- @include('includes/chat/sidebar') --}}
        <!-- End Left panel -->

        <!-- Main content -->
        @yield('content')


    </div>

    @include('includes/chat/modals')

</main>

<!-- All Scripts  -->
@include('includes/chat/script')
