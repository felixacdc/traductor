@extends('admin.layout.layoutAdmin')

@section('content')
    <!-- Right side column. Contains the navbar and content of the page -->
    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Inicio
                <small>Estas en la pagina de inicio</small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="box  box-primary">
                <div class="box-body text-center">
                    <div class="content">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="wow animated zoomInRight titleWelcome" data-wow-delay=".2s"><i class="fa fa-stethoscope wow animated zoomInLeft" data-wow-delay=".5s"></i> <span class="wow animated zoomInDown" data-wow-delay=".9s">Bienvenido</span> {{ Auth::user()->name }}</h1>
                            </div>
                        </div>
                    </div>
                </div><!-- /.box-body -->
            </div><!-- /.box -->

        </section><!-- /.content -->
    </aside><!-- /.right-side -->
@endsection
