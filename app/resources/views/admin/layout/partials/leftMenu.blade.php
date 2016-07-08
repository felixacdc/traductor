<!-- **********************************************************************************************************************************************************
MAIN SIDEBAR MENU
*********************************************************************************************************************************************************** -->
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a href="{{ url('home') }}">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
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
        </div>
    </div>
</aside>
<!--sidebar end-->
