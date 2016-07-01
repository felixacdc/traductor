<!-- **********************************************************************************************************************************************************
MAIN SIDEBAR MENU
*********************************************************************************************************************************************************** -->
<!--sidebar start-->
<aside>
  <div id="sidebar"  class="nav-collapse ">
      <!-- sidebar menu start-->
      <ul class="sidebar-menu" id="nav-accordion">

      	  <p class="centered"><a href="profile.html"><img src="{{ url('img/ui-sam.jpg') }}" class="img-circle" width="60"></a></p>
      	  <h5 class="centered">Hola, {{ Auth::user()->name }}</h5>

          <li class="mt">
              <a href="{{ url('home') }}">
                  <i class="fa fa-dashboard"></i> <span> Inicio</span>
              </a>
          </li>
          <li class="sub-menu">
              <a href="{{ url('home/category') }}">
                  <i class="fa fa-tags"></i> <span> Categorías</span>
              </a>
          </li>
          <li class="sub-menu">
              <a href="{{ url('home/word') }}">
                  <i class="fa fa-shield"></i> <span> Palabras</span>
              </a>
          </li>
      </ul>
      <!-- sidebar menu end-->
  </div>
</aside>
<!--sidebar end-->
