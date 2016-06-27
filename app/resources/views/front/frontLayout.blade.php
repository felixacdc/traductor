@include('front.partials.head')
    @section('menu')
        <li class="active"><a href="{{ url('/') }}">Inicio</a></li>
    @endsection
    </head>

    <body>

        @include('front.partials.nav')

        @yield("content")

        @include('front.partials.footer')

        {!! Html::script("general/js/jquery-3.0.0.min.js") !!}

        @yield('scripts')

    </body>
</html>
