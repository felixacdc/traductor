@include('admin.layout.partials.head')

@yield('styles')

    </head>
    <body class="skin-blue">

        <div id="element" class="introLoading"></div>

        @include('admin.layout.partials.header')

        <div class="wrapper row-offcanvas row-offcanvas-left">

            @include('admin.layout.partials.leftMenu')

            @yield('content')

        </div><!-- ./wrapper -->

    @include('admin.layout.partials.scripts')

    @yield('scripts')

    </body>
</html>
