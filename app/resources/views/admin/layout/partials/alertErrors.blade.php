@if( count($errors) > 0 )
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="alert alert-danger homeloader wow animated fadeInDown">
                <strong>Oh!</strong> Por favor corrige los siguientes errores.<br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endif
