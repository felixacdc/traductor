@if( Session::has('message') )
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="alert alert-success alert-block homeloader wow animated fadeInDown">
                <b>Alerta!</b> {{Session::get('message')}}
            </div>
        </div>
    </div>
@endif
