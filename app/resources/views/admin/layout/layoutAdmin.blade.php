@include('admin.layout.partials.head')

@yield('styles')

    </head>
    <body>
        <section id="container" >
            <div id="element" class="introLoading"></div>

            @include('admin.layout.partials.header')

            @include('admin.layout.partials.leftMenu')

            @yield('content')

            @include('admin.layout.partials.scripts')

            @yield('scripts')
        </section>
    </body>
</html>
