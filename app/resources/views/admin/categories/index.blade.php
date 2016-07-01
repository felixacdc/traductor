@extends('admin.layout.layoutAdmin')

@section('content')
    <section id="main-content">
          <section class="wrapper">

            @include('admin/layout.partials.alertSuccess')
            @include('admin/layout.partials.alertErrors')

            <h3><i class="fa fa-angle-right"></i> Mantenimiento de categorías</h3>
				<div class="row">

	                  <div class="col-md-12">
	                  	  <div class="content-panel">
                              <div class="row">
                                  <div class="col-md-6">
                                      <h4><i class="fa fa-angle-right"></i> Categorías</h4>
                                  </div>
                                  <div class="col-md-6 text-right"><button type="button" name="create" class="btn btn-round btn-theme btn-sm loadModal spaceRight" data-toggle='modal' data-target='#generalModal' data-url="category/create" data-title="Crear Categoría">Crear Categoría</button></div>
                              </div>
	                  	  	  <hr>
                              <table id="dataTable" class="table table-hover">
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
	                  	  </div><! --/content-panel -->
	                  </div><!-- /col-md-12 -->
                </div>
            </section>
        </section>
    @include('admin.layout.partials.modal')
@endsection

@section('scripts')
    <!-- DATA TABES SCRIPT -->
    {!!Html::script("admin/js/datatables/jquery.dataTables.js")!!}
    {!!Html::script("admin/js/datatables/dataTables.bootstrap.js")!!}
    {!! Html::script("general/js/jquery.validate.js") !!}

    <!-- page script -->
    <script type="text/javascript">
        $(function() {
            $("#dataTable").dataTable();
        });
    </script>
@endsection
