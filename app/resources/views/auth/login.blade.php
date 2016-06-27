<!DOCTYPE html>
<html class="bg-black">
    <head>
        <meta charset="UTF-8">
        <title>Inicio de Sesión</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Traductor">
        <meta name="author" content="Félix Méndez">
        <!-- Bootstrap core CSS -->
        {!! Html::style("front/css/bootstrap.css") !!}

        <!-- Custom styles for this template -->
        {!! Html::style("front/css/font-awesome.min.css") !!}
        {!! Html::style("front/css/AdminLTE.css") !!}
        {!!Html::style("front/css/animate.css")!!}

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="bg-black">

        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <br><br>
                <div class="alert alert-danger alert-dismissable homeloader wow flipInX" data-wow-duration=".8s">
                    <i class="fa fa-ban"></i>
                    <strong>Oh!</strong> Correo o contraseña incorrecta.<br><br>
        		</div>
            </div>
        </div>
        <div class="form-box wow zoomInDown" id="login-box">
            <div class="header">Iniciar Sesión</div>
                {!! Form::open(["url" => 'auth/login', "method" => "POST", "id" => "login", "class" => "form-validate"]) !!}
                    <input type="hidden" name="token" id="token" value="{{ csrf_token() }}">
                    <div class="body bg-gray">
                        <div class="form-group">
                            {!! Form::email("email", old('email'), ["class" => "form-control", "id" => "email", "placeholder" => "Correo Electronico", "required" => "required"]) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::password("password", ["class" => "form-control", "id" => "password", "placeholder" => "Contraseña", "required" => "required"]) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::checkbox("remember", false) !!} Recordarme
                        </div>
                    </div>
                    <div class="footer">
                        {!! Form::submit("Iniciar Sesión", ["class" => "btn bg-olive btn-block"]) !!}
                    </div>
                {!! Form::close() !!}


        {!! Html::script("general/js/jquery-3.0.0.min.js") !!}
        {!! Html::script("general/js/bootstrap.min.js")!!}
        {!! Html::script("general/js/jquery.validate.js") !!}
        {!! Html::script("front/js/login.js") !!}
        {!!Html::script("general/js/wow.min.js")!!}

    </body>
</html>
