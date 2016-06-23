<!-- Fixed navbar -->
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ url('/') }}">FOCUS.</a>
    </div>
    <div class="navbar-collapse collapse navbar-right">
      <ul class="nav navbar-nav">
        @yield('menu')
        <li><a href="{{ url('/categorias') }}">Categorias</a></li>
        <li><a href="{{ url('/palabras') }}">Buscar Palabras</a></li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</div>
