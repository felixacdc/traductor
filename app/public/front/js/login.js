(function(){

    self.Verification = function(email, password, token) {
        this.email = email;
        this.password = password;
        this.token = token;
        this.url = "verify/";
    }

    self.Verification.prototype = {
        verify: function(callback) {
            $.ajax({
                url: this.url,
                headers: {'X-CSRF-TOKEN': this.token},
                type: "POST",
                data: {
                    email: this.email,
                    password: this.password
                },
                success: function(response) {
                    if ( response == "ok") {
                        callback(null);
                    } else {
                        return callback(new Error("Correo o contraseña incorrectas"));
                    }
                }
            });
        }
    }

})();

$(document).ready(function() {

    $("#login-box").css("display", "block"), (new WOW).init();

    $("#login").validate({
        rules: {
            email: {
                email: true
            },
            password: {
                minlength:8
            }
        },
        messages: {
            email: {
                required: "Ingrese el campo",
                email: "Correo Electronico Incorrecto."
            },
            password: {
                required: "Ingrese el campo",
                minlength: "La contraseña debe tener 8 o mas caracteres."
            }
        },
        submitHandler: function(form) {
            $("#login .btn-block").prop('disabled', true);
            var verification_data = new Verification($("#email").val(), $("#password").val(), $("#token").val());

            verification_data.verify(function(err) {
                if (err) {
                    $(".homeloader").fadeIn();
                    $("#login .btn-block").prop('disabled', false);
                } else form.submit();
            });
        }
    });

});
