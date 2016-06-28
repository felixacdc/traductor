<!-- Left side column. contains the logo and sidebar -->
<aside class="left-side sidebar-offcanvas">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('img/avatar.png') }}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>Hola, {{ Auth::user()->name }}</p>

                <a href="#"><i class="fa fa-circle text-success"></i> En linea</a>
            </div>
        </div>
        <ul class="sidebar-menu">
            <li>
                <a href="{{ url('admin') }}">
                    <i class="fa fa-dashboard"></i> <span> Inicio</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
