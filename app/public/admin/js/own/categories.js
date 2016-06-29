$(document).ready(function() {
    var msgRequired = "Este campo es obligatorio";
    
    $("#createForm").validate({
        messages: {
            description: {
                required: msgRequired
            }
        }
    });
});
