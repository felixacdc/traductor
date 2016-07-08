<div class="form-group">
    {!!Form::label('description','Descripción:', ['class' => 'control-label col-lg-3'])!!}
    <div class="col-lg-9">
        {!!Form::text("description", null, ['class' => 'form-control', 'placeholder' => 'Inserta el Nombre de la categoría', 'required' => 'required', 'autocomplete'=>'off'])!!}
    </div>
</div>
