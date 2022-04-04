<?php echo "Hola";?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">

    <!--Referencias-->
    <link rel="stylesheet" href="../resources/Bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../resources/css/Olvide mi contraseña.css">


    <title>Strett Shoes</title>


    <!--Aplicando estilos de tipo interno-->

    <!--JQUERY-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- FRAMEWORK BOOTSTRAP para el estilo de la pagina-->

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <!-- Los iconos tipo Solid de Fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
</head>

<body>



    <!--Barra de navehación-->
    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="../index.html">INICIO</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="./REGISTRARSE.html">REGISTRARSE <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./PRODUCTOS.html">PRODUCTOS</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                NUEVO
              </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="./HOMBRES.html">HOMBRE</a>
                        <a class="dropdown-item" href="./MUJERES.html">MUJERES</a>

                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="./Niños.html">NIÑOS</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link indisabled" href="./views/OFERTAS.html" tabindex="-1" aria-disabled="false">OFERTAS.</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <!--Seccion 1 Home-->
    <h1 style="font-family: AbeeZee;
    color: #FF3D00;">Recuperar contraseña</h1>
    <div class="container">
        <h2 style="font-family: AbeeZee
        ">Ingrese su correo con el que se ha registrado</h2>
        <form action="" class="form">
            <div class="form__correo">
                <input type="email" placeholder="Ingrese su correo" class="correo">
            </div>
            <div class="form__buttom">
                <a href="./iniciar sesion.html" class="salir">Salir</a>
                <button class="enviar">Enviar link</button>
            </div>
        </form>




    </div>
    <script src="../resources/Bootstrap/jquery-3.5.1.slim.min.js "></script>
    <script src="../resources/Bootstrap/bootstrap.bundle.min.js "></script>

</body>


</html>