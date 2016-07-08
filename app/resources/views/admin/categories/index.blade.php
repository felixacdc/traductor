@extends('admin.layout.layoutAdmin')

@section('content')
    <section id="main-content">
          <section class="wrapper">

            @include('admin/layout.partials.alertSuccess')
            @include('admin/layout.partials.alertErrors')

				<div class="row">
	                  <div class="col-md-12">
	                  	  <section class="panel">
                              <header class="panel-heading">
                                    Mantenimiento Categorias
                                    <span class="tools pull-right">
                                        <button type="button" name="create" class="btn btn-primary btn-sm loadModal spaceRight" data-toggle='modal' data-target='#generalModal' data-url="category/create" data-title="Crear Categoría">Crear Categoría</button>
                                     </span>
                                </header>
                              <div class="panel-body">
                                  <div class="adv-table">
                                      <table id="dynamic-table" class="display table table-bordered table-striped">
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
                                  </div>
                              </div>

	                  	  </section><! --/content-panel -->
	                  </div><!-- /col-md-12 -->
                </div>
            </section>
        </section>
    @include('admin.layout.partials.modal')
@endsection

@section('scripts')
    <!-- DATA TABES SCRIPT -->
    {!! Html::script("admin/js/datatables/jquery.dataTables.js") !!}
    {!! Html::script("admin/js/datatables/DT_bootstrap.js") !!}
    {!! Html::script("general/js/jquery.validate.js") !!}

    <!-- page script -->
    <script type="text/javascript">
        $(function() {
            $("#dynamic-table").dataTable();
            $("#dynamic-table_length label select").addClass('form-control');
        });
    </script>
@endsection
