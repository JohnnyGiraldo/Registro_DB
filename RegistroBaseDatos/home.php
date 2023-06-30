<?php
session_start();
include('./verificarDatos/config.php');
if (isset($_SESSION['email']) != "") {
    $nameUser   = $_SESSION['fullName'];
    $email      = $_SESSION['email'];
    $idUser     = $_SESSION['id'];
?>

<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./assets/./css/home.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Inicio :: <?php echo $nameUser; ?></title>
  </head>
  <!--______________________________________________________________________________________________-->
  <body>
    <!--LOGO-->
    <header class="header">
        <div class="logo">
<!---->            <img src="/assets/./images/alkamedica.jpg" alt="Logo de la marca">
        </div>
        <nav>
           <ul class="nav-links">
                <li><a href="#">Services</a></li>
                <li><a href="#">Projects</a></li>
                <li><a href="registro.php">Registro</a></li>
           </ul>            
        </nav>
        <a class="btn" href="#"><button>Contact</button></a>

<!---->        <a onclick="openNav()" class="menu" href="#"><button>Menu</button></a>

<!---->        <div id="mobile-menu" class="overlay">
<!---->            <a onclick="closeNav()" href="" class="close">&times;</a>
<!---->            <div class="overlay-content">
<!---->                <a href="#">Services</a>
<!---->                <a href="#">Projects</a>
<!---->                <a href="registro.php">Registro</a>
<!---->                <a href="#">Contact</a>
<!---->            </div>
<!---->        </div>

    </header>
<!---->    <script type="text/javascript" src="/assets/./js/nav.js"></script>

<div class="container">
  
  <div class="row text-center">
    <div class="col-md-12 p-md-4" style="background-color: #f9f9f9;">
      <p>Hola ya estoy logueado, soy <strong><?php echo $nameUser; ?></strong></p>
      <hr>
    </div>
  </div>
</div>
  </body>
   <!--______________________________________________________________________________________________-->
</html>

<?php 
} else { ?>
<script type="text/javascript">
    location.href="verificarDatos/cerrar.php";
</script>
<?php }   
?>