const modalAdmin = new bootstrap.Modal(document.getElementById("modal_login_admin"), { keyboard: false })
const modalUsuario = new bootstrap.Modal(document.getElementById("modal_login_usuario"), { keyboard: false })

function login_usuario() {
    if ($('#user').val() == "") {
        var msg = "CAMPO USUARIO VACIO";
        error_alert(msg);
    } else if ($('#user_pass').val() == "") {
        var msg = "CAMPO CONTRASEÑA VACIO";
        error_alert(msg);
    } else {
        var datos = new FormData()
        datos.append("usuario", $('#user').val());
        datos.append("user_pass", $('#user_pass').val());
        $.ajax({
            url: "ctrl_login",
            type: "POST",
            processData: false,
            contentType: false,
            data: datos,
            success: function(respuesta) {
                var resultado = JSON.parse(respuesta);                
                if (resultado.status == 1) {
                    resultado = resultado.resultado[0];
                    var msg = "BIENVENIDO " + resultado.correo + " Y ERES UN " + resultado.rol;
                    success_alert(msg);
                    $("#texto-autenticado").html("Bienvenido " + resultado.correo + " rol de: " + resultado.rol);
                    var modal = new bootstrap.Modal(document.getElementById("modal_login_usuario"), { keyboard: false })
                    modalUsuario.hide();
                } else {
                    var msg = "USUARIO y/o CONTRASEÑA INCORRECTOS";
                    error_alert(msg);
                }
            },
            error: function(respuesta) {
                var msg = "ERROR EN EL SERVIDOR";
                error_alert(msg);
            }
        });
    }
}

function login_admin() {
    if ($('#user_admin').val() == "") {
        var msg = "CAMPO USUARIO VACIO";
        error_alert(msg);
    } else if ($('#admin_pass').val() == "") {
        var msg = "CAMPO CONTRASEÑA VACIO";
        error_alert(msg);
    } else {
        var datos = new FormData()
        datos.append("admin_user", $('#user_admin').val());
        datos.append("admin_user_pass", $('#admin_pass').val());
        $.ajax({
            url: "ctrl_login_admin",
            type: "POST",
            processData: false,
            contentType: false,
            data: datos,
            success: function(respuesta) {                
                var resultado = JSON.parse(respuesta);                                
                if (resultado.status == 1) {
                    resultado = resultado.resultado[0];
                    var msg = "BIENVENIDO " + resultado.correo + " Y ERES UN " + resultado.rol;
                    $("#texto-autenticado").html("Bienvenido " + resultado.correo + " rol de: " + resultado.rol);
                    success_alert(msg);                    
                    modalAdmin.hide();
                    document.querySelector("#item-dashboard").classList.toggle("d-none");
                } else {
                    var msg = "USUARIO y/o CONTRASEÑA INCORRECTOS";
                    error_alert(msg);
                }
            },
            error: function(respuesta) {
                var msg = "ERROR EN EL SERVIDOR";
                error_alert(msg);
            }
        });
    }
}

function success_alert(msg) {
    $("#texto_bienvenida").html(msg);
    $('#alerta_login_correcto').addClass('show');
    setTimeout(function() {
        $('#alerta_login_correcto').attr("class", "alert alert-success alert-dismissible fade");
        $('#texto_bienvenida').html('');
        // Reset input
        $('#user').val('');
        $('#user_pass').val('');
        $('#user_admin').val('');
        $('#admin_pass').val('');
    }, 2000)
}

function error_alert(msg) {
    document.getElementById("texto_error").innerHTML = msg;
    $('#alerta_login_error').addClass('show');
    setTimeout(function() {
        $('#alerta_login_error').attr("class", "alert alert-danger alert-dismissible fade");
        $('#alerta_login_error').html('');
    }, 2000)
}