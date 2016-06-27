(function(){

    $("#login").validate({
        rules: {
            email: {
                email: true
            },
            password: {
                min:8
            }
        },
        messages: {
            email: {
                required: "Ingrese el campo",
                email: "Correo Electronico Incorrecto."
            },
            password: {
                required: "Ingrese el campo",
                min: "La contraseña debe tener 8 o mas caracteres."
            }
        }
    });

})();
