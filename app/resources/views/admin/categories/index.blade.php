@extends('admin.layout.layoutAdmin')

@section('content')
    <!-- Right side column. Contains the navbar and content of the page -->
    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Categorías
                <small>Mantenimiento de categorías.</small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="box  box-primary">

                <div class="box-header">
                    <div class="content">
                        <div class="row">
                            <div class="col-md-6"><h3 class="box-title">Categorías</h3></div>
                            <div class="col-md-6 text-right"><button type="button" name="create" class="btn btn-primary loadModal" data-toggle='modal' data-target='#generalModal' data-url="category/create" data-title="Crear Categoría">Crear Categoría</button></div>
                        </div>
                    </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive">
                    <table id="dataTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Descripción</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach($categories as  $key => $data)
                             <tr>
                                 <td>{{ $key + 1   }}</td>
                                 <td> {{ $data->description }} </td>
                             </tr>
                         @endforeach
                        </tbody>
                    </table>
                </div><!-- /.box-body -->

            </div><!-- /.box -->

        </section><!-- /.content -->
    </aside><!-- /.right-side -->

    @include('admin.layout.partials.modal')
@endsection

@section('scripts')
    <!-- DATA TABES SCRIPT -->
    {!!Html::script("admin/js/datatables/jquery.dataTables.js")!!}
    {!!Html::script("admin/js/datatables/dataTables.bootstrap.js")!!}

    <!-- page script -->
    <script type="text/javascript">
        $(function() {
            $("#dataTable").dataTable();
        });
    </script>
@endsection
