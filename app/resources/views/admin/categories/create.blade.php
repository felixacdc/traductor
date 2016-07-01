{!! Form::open(["route" => "home.category.store", "method" => "POST", 'class' => 'form-validate', 'id' => 'createForm']) !!}

    @include('admin.categories.partials.inputsForm')

    <div class="modal-footer">
        {!! Form::submit('Crear', ['class' => 'btn btn-theme']) !!}
        <button type="button" class="btn btn-danger" data-dismiss="modal">cerrar</button>
    </div>
{!! Form::close() !!}

{!! Html::script("admin/js/own/categories.js") !!}
