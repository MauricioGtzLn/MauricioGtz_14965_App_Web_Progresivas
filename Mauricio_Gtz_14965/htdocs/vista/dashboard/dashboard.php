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
   <div class="container-lg p-3 mt-5" >
      <div class="row row-cols-1 row-cols-md-2 g-4 align-items-center flex-column">
         <h1 class="text-center">Bienvenido eres un adminstrador</h1>
         <img src="configuracion/imagenes/dashboard.png" alt="">
      </div>   
   </div>

</body>

</html>