<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto PWA <?php echo date("Y"); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="configuracion/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="configuracion/css/estilos.css">
</head>

<body>
    <!-- INICIA EL MENU PRINCIPAL -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="/"><span class="fw-bold text-white">Inicio</span>
                            <span class="visually-hidden">(current)</span>
                        </a>
                    </li>
                    <li id="item-dashboard" class="nav-item d-none">
                        <a class="nav-link active" href="/dashboard"><span class="fw-bold text-white">Dashboard</span>                            
                        </a>
                    </li>
                </ul>
                <div class="d-flex">
                    <p id="texto-autenticado" class="mb-0 fw-bold text-white"></p>
                </div>
            </div>
        </div>
    </nav>
    <!-- TERMINA EL MENU PRINCIPAL -->
    <!-- INICIA EL CONTENIDO DE LA PÁGINA -->
    <div class="container-lg p-3 mt-5" style="text-align: center;">
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
                <div class="card shadow rounded d-flex align-items-center py-3">
                    <img src="configuracion/imagenes/user.jpg" style="width: 150px;" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title fw-bold text-uppercase">Usuario</h5>
                        <p class="card-text">
                            <button data-bs-toggle="modal" data-bs-target="#modal_login_usuario"class="btn btn-primary">Ingresar</button>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow rounded d-flex align-items-center py-3">
                    <img src="configuracion/imagenes/admin.png" style="width: 150px;" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title fw-bold text-uppercase">Administrador</h5>
                        <p class="card-text"><button data-bs-toggle="modal" data-bs-target="#modal_login_admin"
                                class="btn btn-primary">Ingresar</button></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- TERMINA EL CONTENIDO DE LA PÁGINA -->

    <!-- INICIA MODAL PARA LOGIN -->
    <div class="modal fade" id="modal_login_usuario">
        <div class="modal-dialog" style="width: 350px;">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header justify-content-center">
                    <h4 class="modal-title text-center text-uppercase fw-bold text-dark">Iniciar Sesión Usuario</h4>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" placeholder="Ingrese su correo" id="user">
                        <label for="user" class="fw-bold">Correo:</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" placeholder="Ingrese Contraseña" id="user_pass">
                        <label for="user_pass" class="fw-bold">Contraseña:</label>
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer" style="text-align: center; display: inline;">
                    <button type="button" onclick="login_usuario()" class="btn btn-primary w-100">Ingresar</button>
                    <button type="button" class="btn btn-danger w-100" data-bs-dismiss="modal">Cerrar</button>
                </div>

            </div>
        </div>
    </div>

    <div class="modal fade" id="modal_login_admin">
        <div class="modal-dialog" style="width: 350px;">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header justify-content-center">
                    <h4 class="modal-title text-center text-uppercase fw-bold text-dark">Iniciar Sesión Administrador</h4>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" placeholder="Ingrese Correo" id="user_admin">
                        <label for="user_admin" class="fw-bold">Correo:</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" placeholder="Ingrese Contraseña" id="admin_pass">
                        <label for="admin_pass" class="fw-bold">Contraseña</label>
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer" style="text-align: center; display: inline;">
                    <button type="button" onclick="login_admin()" class="btn btn-primary w-100">Ingresar</button>
                    <button type="button" class="btn btn-danger w-100" data-bs-dismiss="modal">Cerrar</button>
                </div>

            </div>
        </div>
    </div>
    <!-- TERMINA MODAL PARA LOGIN -->

<div id="show_alert"></div>

<!-- ALERTAS PARA LOGIN -->
<div class="alert alert-success alert-dismissible fade" style="position: fixed; top: 8%; right: 0; z-index: 10000;" id="alerta_login_correcto">
    <p id="texto_bienvenida" class="mb-0"></p>
</div>
<div class="alert alert-danger alert-dismissible fade" style="position: fixed; top: 8%; right: 0; z-index: 10000;" id="alerta_login_error">
    <p id="texto_error" class="mb-0"></p>
</div>
<!-- FIN DE ALERTAS PARA LOGIN-->






    <!-- SE LLAMA AL ARCHIVO login.js -->
    <script src="configuracion/js/login.js"></script>
</body>

</html>