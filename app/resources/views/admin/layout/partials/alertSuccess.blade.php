@if( Session::has('message') )
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="alert alert-success homeloader wow animated fadeInDown" id="error">
                <b>Alerta!</b> {{Session::get('message')}}
            </div>
        </div>
    </div>
@endif
