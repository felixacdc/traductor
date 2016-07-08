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
        {!! Html::style("admin/css/bootstrap-reset.css") !!}

        <!-- Custom styles for this template -->
        {!! Html::style("front/css/font-awesome.min.css") !!}
        {!! Html::style("admin/css/style.css") !!}
        {!! Html::style("admin/css/style-responsive.css") !!}
        {!!Html::style("front/css/animate.css")!!}

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="login-body">

        <div class="container">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <br><br>
                    <div class="alert alert-danger homeloader wow flipInX" data-wow-duration=".8s"><strong>Oh!</strong> El correo electronico o la contraseña son incorrectos.
                    </div></div>
                </div>
            </div>
        </div>

    	<div class="container">
            {!! Form::open(["url" => 'auth/login', "method" => "POST", "id" => "login", "class" => "form-validate form-signin wow zoomInDown"]) !!}
                <h2 class="form-signin-heading">Iniciar Sesión</h2>
                <div class="login-wrap">
                    <div class="user-login-info">
                        <input type="hidden" name="token" id="token" value="{{ csrf_token() }}">
                        {!! Form::email("email", old('email'), ["class" => "form-control", "id" => "email", "placeholder" => "Correo Electronico", "required" => "required"]) !!}
                        {!! Form::password("password", ["class" => "form-control", "id" => "password", "placeholder" => "Contraseña", "required" => "required"]) !!}
                    </div>

                    <button class="btn btn-lg btn-login btn-block" type="submit"><i class="fa fa-lock"></i> Iniciar Sesión</button>

                </div>
              {!! Form::close() !!}
        </div>


        {!! Html::script("general/js/jquery-3.0.0.min.js") !!}
        {!! Html::script("general/js/bootstrap.min.js")!!}
        {!! Html::script("general/js/jquery.validate.js") !!}
        {!! Html::script("front/js/login.js") !!}
        {!! Html::script("general/js/wow.min.js") !!}

    </body>
</html>
