@include('client.layout.header')

<body class="app sidebar-mini ltr light-mode">
    <!-- GLOBAL-LOADER -->
    <div id="global-loader">
        <img src="client/assets/images/loader.svg" class="loader-img" alt="Loader">
    </div>
    <!-- /GLOBAL-LOADER -->

    <!-- PAGE -->
    <div class="page">
        <div class="page-main">
            @include('client.layout.navbar')
            @include('client.layout.sidebar')
            @yield('content')
        </div>
    </div>
    @include('client.layout.footer')
