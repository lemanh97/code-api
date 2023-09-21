@include('client.auth.layout.header')

<body class="app sidebar-mini ltr login-img">

    <!-- BACKGROUND-IMAGE -->
    <div class="">

        <!-- GLOABAL LOADER -->
        <div id="global-loader">
            <img src="{{ url('client/assets/images/loader.svg') }}" class="loader-img" alt="Loader">
        </div>
        <!-- /GLOABAL LOADER -->
        @yield('content')

    </div>
    <!-- BACKGROUND-IMAGE CLOSED -->

    @include('client.auth.layout.footer')
