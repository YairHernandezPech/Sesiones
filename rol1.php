<?php 

session_start();
$usuario = $_SESSION['username'];

if (!isset($usuario)) {
    header("location: sesiones.php");
}else{

    //echo"<h1>Bienvenido $usuario</h1>";

    //echo"<a href='logica/salir.php'>Salir</a>";

    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
        <!--qui comienza la parte de bostrap-->
        <link rel="stylesheet" type="text/css" href="bootstrap.min.css" />
        <script src="bootstrap.bundle.min.js"></script>
        <!--aqui termina-->
    <title>Login</title>
</head>
<body style="background-color: rgb(158, 158, 158);">
    <!--<div class="container-lg">
      aqui inicia menu de navegacion-->
            <nav class="navbar bg-light" id="colorNav">
                <div class="container" id="colorNav">
                  <a class="navbar-brand" href="#">
                    <img src="http://www.utponiente.edu.mx/utp/assets/img/universidad/AZUL%20TRANSP%2021.png" alt="Bootstrap" width="90" height="40">
                    <strong id="colorNavletra">Bienvenido <?php echo"<strong> $usuario</strong>";?></strong> 
                  </a>
                  <ul class="nav nav-pills">

                    <li class="nav-item">
                      <a class="nav-link" href="http://www.utponiente.edu.mx/utp/carreras.php" id="colorNavletra">Carreras</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="logica/salir.php" id="colorNavletra">Salir</a>
                    </li>
                    <div class="col">
            <button
              class="btn btn-primary"
              type="button"
              data-bs-toggle="offcanvas"
              data-bs-target="#offcanvasRight"
              aria-controls="offcanvasRight"
              id="colorNavletra"
            >
              Perfil
            </button>
            <div
              class="offcanvas offcanvas-end"
              tabindex="-1"
              id="offcanvasRight"
              aria-labelledby="offcanvasRightLabel"
            >
              <div class="offcanvas-header">
                <?php echo "<h5 > $usuario </h5>"?>
   
                <button
                  type="button"
                  class="btn-close"
                  data-bs-dismiss="offcanvas"
                  aria-label="Close"
                ></button>
              </div>
              <div class="" style="color: black">
      Fabuloso ahora eres perteneciente a la universidad tecnologica del poniente 
      <div class = "imge1" >
      <img src="img/perfil.png" alt="...">
      </div>
              </div>
            </div>
          </div>
        </div>
      </div>

                </ul>
                </div>
              </nav>
              <!--aqui termina-->
              <br>
              <!--aqui inicia  3 cards-->
              <div class="container text-center">
                <div class="row align-items-start">
                  <div class="col">
                    <div class="card" style="width: 18rem;" id="colorCards">
                        <img src="img/estudiante.png" class="card-img-top" id="img" alt="...">
                        <div class="card-body" id="colorCards">
                            <h5 class="card-title">PROCESO DE INSCRIPCIÓN</h5>
                          <p class="card-text">Información para alumnos de Nuevo Ingreso, de inscripción al 1er cuatrimestre.</p>
                        </div>
                      </div>
                  </div>
                  <div class="col">
                    <div class="card" style="width: 18rem;" id="colorCards">
                        <img src="img/caledario.png" class="card-img-top" id="img" alt="...">
                        <div class="card-body" id="colorCards">
                            <h5 class="card-title">Calendario Escolar</h5>
                          <p class="card-text">Consulta nuestro "Calendario Escolar y de Actividades Académico-Administrativas".</p>
                        </div>
                      </div>
                  </div>
                  <div class="col">
                    <div class="card" style="width: 18rem;" id="colorCards">
                        <img src="img/libros.png" class="card-img-top" id="img" alt="...">
                        <div class="card-body" id="colorCards">
                            <h5 class="card-title">OFERTA EDUCATIVA</h5>
                          <p class="card-text">Consulta la convocatoria para ingresar a las carreras de nivel TSU y licenciatura.</p>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
              <!--aqui termina-->
              <br>
              <!--aqui inicia  3 cards-->
              <div class="container text-center">
                <div class="row align-items-start">
                  <div class="col">
                    <div class="card" style="width: 18rem;" id="colorCards">
                        <img src="img/citas.png" class="card-img-top" id="img" alt="...">
                        <div class="card-body" id="colorCards">
                            <h5 class="card-title">Citas</h5>
                          <p class="card-text">Agenda una cita.</p>
                          <button type="button" class="btn btn-info btn-sm">Reservar ahora</button>
                        </div>
                      </div>
                  </div>
                  <div class="col">
                    <div class="card" style="width: 18rem;" id="colorCards">
                        <img src="img/integridad.png" class="card-img-top" id="img" alt="...">
                        <div class="card-body" id="colorCards">
                            <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                      </div>
                  </div>
                  <div class="col">
                    <div class="card" style="width: 18rem;" id="colorCards">
                        <img src="img/privacidad.png" class="card-img-top" id="img" alt="...">
                        <div class="card-body" id="colorCards">
                            <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
              <!--aqui termina
    </div>-->
   
</body>
</html>

